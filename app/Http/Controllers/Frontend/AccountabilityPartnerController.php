<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AccountabilityPartnerRequest;
use App\Models\Access\User\User;
use App\Models\AccountabilityPartner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountabilityPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partners = AccountabilityPartner::where('user_id', Auth::id())->latest()->paginate(config('constant.common_pagination'));

        //        dd($partners);
        return view('frontend.account_partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('frontend.account_partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function signStore(AccountabilityPartnerRequest $request): RedirectResponse
    {
        $exists = AccountabilityPartner::where('email', $request->email)->first();
        if ($exists) {

            return redirect()->route('frontend.account_partner.index')->with('flash_danger', 'Partner Already Exist.');
        } else {
            $signer = new AccountabilityPartner;
            $signer->user_id = Auth::id();
            $signer->email = $request->email;
            $signer->name = $request->name;
            $signer->save();

            return redirect()->route('frontend.account_partner.index')->with('flash_success', 'Partner saved successfully.');
        }
        // $ifNewUser = true;
        // $ifSignerExists = null;
        // if ($exists) {
        //     $ifNewUser = false;
        //     $ifSignerExists = Signer::where('from_user_id', Auth::id())->where('invited_user_id', $exists->id)->first();
        // }
        // if ($ifSignerExists) {
        //     $exists->notify(new SenderNeedsRegistration($exists->confirmation_code, $exists->first_name, $request->property_id));

        //     return redirect()->route('frontend.account_partner.index')->with('flash_danger', 'Signer Already Exist.');
        // }
        // if (! $exists && ! $ifSignerExists) {
        //     $exists = $this->_createUser($request, $ifNewUser);
        // }
        // //dd($exists->toArray());
        // if ($exists && $exists->id != Auth::id() && Auth::check() && $exists->roles[0]->name == 'User') {
        //     $this->_storeSigner($exists);
        //     $newUser = new User;
        //     $newUser->email = $exists->email;
        //     $newUser->confirmation_code = $exists->confirmation_code;
        //     $newUser->created_at = $exists->created_at;
        //     //                $newUser->email = $request->email;
        //     if ($exists->status == 0) {
        //         $newUser->notify(new SenderNeedsRegistration($exists->confirmation_code, $exists->first_name));
        //     } else {
        //         $exists->notify(new RecieverNeedsLogin($exists->confirmation_code, $exists->first_name));
        //     }

        //     return redirect()->route('frontend.account_partner.index')->with('flash_success', 'Signer saved successfully.');
        // }

        // return redirect()->route('frontend.account_partner.index')->with('flash_success', 'Already sent.');
    }

    public function signerView($id)
    {
        if (Auth::check() && $id) {

            $user = AccountabilityPartner::where('id', $id)->where('user_id', Auth::id())->first();

            //            dump($user->toArray());
            //            dd($network->toArray());
            return view('frontend.account_partner.user_details', compact('user'));
        }

        return redirect()->route('frontend.index')->with('flash_success', 'Something went wrong, please try later.');
    }

    public function deletePartner($id)
    {
        if ($id && Auth::check()) {
            if (AccountabilityPartner::where('id', $id)->where('user_id', Auth::id())->delete()) {

                return redirect()->route('frontend.account_partner.index')->with('flash_success', 'Partner deleted successfully.');
                //            return response()->json(['success' => true, 'message' => 'Signer deleted successfully'],
                //                    200);
            }
        }

        return redirect()->route('frontend.account_partner.index')->with('flash_success', 'Partner Deletion Failed.');
        //        return response()->json(['success' => true, 'message' => 'Signer Deletion Failed'],
        //                500);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AccountabilityPartner $accountabilityPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccountabilityPartner $accountabilityPartner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccountabilityPartner $accountabilityPartner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccountabilityPartner $accountabilityPartner)
    {
        //
    }
}
