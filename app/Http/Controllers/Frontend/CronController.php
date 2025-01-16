<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\Frontend\WellnessSummaryMail;
use App\Models\Access\User\User;
use App\Models\Backend\UserWellnessPoint;
use App\Models\Property;
use App\Models\RentOffer;
use App\Models\SaleOffer;
use App\Models\Signer;
use App\Models\UserWellnessSession;
use App\Services\EmailLogService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

// use App\Models\Backend\UserWellnessPoint;
class CronController extends Controller
{
    public function checkBackToMarket($days = '')
    {
        //        \Log::info('cron set.');
        $previousDate = ! empty($days) ? Carbon::now()->subDays($days) : Carbon::now()->subDays(config('settings.back_to_market_days'));
        //	dd($previousDate);
        $properties = Property::where('created_at', '<', $previousDate)
            ->where('status', '!=', config('constant.inverse_property_status.Unavailable'))
            ->with(['rentOffer' => function ($rentQuery) {
                $rentQuery->orderByDesc('created_at')->first();
            }, 'saleOffer' => function ($saleQuery) {
                $saleQuery->orderByDesc('created_at')->first();
            }, 'user'])
            ->get();
        //		    dd($properties);
        foreach ($properties as $property) {
            if (($property->saleOffer->count() == 0 && $property->rentOffer->count() == 0)) {
                if ($property->back_to_market_date == null) {
                    Property::where('id', $property->id)->update(['status' => config('constant.inverse_property_status.Unavailable')]);
                    $this->_backToMarketMail($property);
                } elseif ($property->back_to_market_date != null) {
                    if ($property->back_to_market_date < $previousDate) {
                        Property::where('id', $property->id)->update(['status' => config('constant.inverse_property_status.Unavailable')]);
                        $this->_backToMarketMail($property);
                    }
                }
            } elseif ($property->saleOffer->count() >= 1 && $property->rentOffer->count() == 0) {
                if ($property->saleOffer->first()->created_at < $previousDate) {
                    Property::where('id', $property->id)->update(['status' => config('constant.inverse_property_status.Unavailable')]);
                    //                    SaleOffer::where('id',$property->saleOffer->first()->id)->update(['status'=>config('constant.inverse_offer_status.rejected_by_seller')]);
                    $this->_backToMarketMail($property);
                }
            } elseif ($property->saleOffer->count() == 0 && $property->rentOffer->count() >= 1) {
                if ($property->rentOffer->first()->created_at < $previousDate) {
                    Property::where('id', $property->id)->update(['status' => config('constant.inverse_property_status.Unavailable')]);
                    //                    RentOffer::where('id',$property->rentOffer->first()->id)->update(['status'=>config('constant.inverse_rent_offer_status.rejected_by_landlord')]);
                    $this->_backToMarketMail($property);
                }
            }
        }
    }

    private function _backToMarketMail($property)
    {
        $emailSubject = 'Freezylist : Property Inactive';
        $propertyLink = route('frontend.propertyDetails', $property->id);
        $ownerName = getFullName($property->user);
        $emailBody = 'Your '.$propertyLink.' listing is deactivated and no longer available in the market due to no activity on it from last 30 days. If you still wish it to be available in the market please open your listing page and press "back to the market" button.';
        //        dd($emailBody);
        try {
            Mail::send('frontend.offer.back_to_market_mail',
                ['propertyLink' => $propertyLink,
                    'ownerName' => $ownerName],
                function ($mg) use ($property, $emailSubject) {
                    $mg->to($property->user->email)->subject($emailSubject);
                });
        } catch (Exception $e) {
            Log::error('failed to send email on back to market having error message'.$e->getMessage());
        }
        $saveLog = new EmailLogService;
        $saveLog->saveLog($property->id, $property->user_id, null, $emailSubject, $emailBody, config('constant.property_type.'.$property->property_type), url()->previous());
    }

    public function WellnessReport()
    {
        \Log::info('Wellness Cron Run');
        $welness_complete_sessions = UserWellnessSession::where('status', 1)
            ->groupBy('user_id')
            ->select('user_id') // Add more aggregates if needed
            ->get();
        if (count($welness_complete_sessions) > 0) {
            foreach ($welness_complete_sessions as $key => $value) {
                $user_ids = User::with('user_profile')->where('id', '=', (int) $value->user_id)->get()->first();

                $points = UserWellnessPoint::where('user_id', (int) $value->user_id)->sum('points');
                if ($user_ids->first_name != null) {
                    $data['first_name'] = $user_ids->first_name.' '.$user_ids->last_name;
                } else {
                    $data['first_name'] = $user_ids->user_profile->full_name;
                }
                $data['points'] = $points;
                // $data['email'] = $user_ids->email;

                Mail::to($user_ids->email)->send(new WellnessSummaryMail($data));
                $partners = Signer::where('from_user_id', '=', (int) $value->user_id)->get();
                foreach ($partners as $key => $partner) {

                    $user_id_partner = User::where('id', '=', (int) $partner->invited_user_id)->get()->first();
                    Mail::to($user_id_partner->email)->send(new WellnessSummaryMail($data));
                }

            }
        }
    }
}
