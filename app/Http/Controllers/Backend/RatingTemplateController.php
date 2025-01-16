<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SaveRatingTemplateRequest;
use App\Models\RatingTemplate;
use App\Models\RatingTemplateSection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RatingTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $templates = RatingTemplate::latest()->get();

        return view('backend.rating_template.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.rating_template.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveRatingTemplateRequest $request): JsonResponse
    {
        //
        $data = $request->all();
        // dd($data);
        $new_template = RatingTemplate::find($data['id'] ?? 0) ?? new RatingTemplate;
        // $new_template = new RatingTemplate();
        $new_template->title = $data['title'];
        $new_template->user_id = Auth::id();
        if ($new_template->save()) {
            $id = [];
            // $new_template->template_option()->delete();
            foreach ($data['template_option'] as $key => $value) {

                $new_rating_template = RatingTemplateSection::find($value['id'] ?? 0) ?? new RatingTemplateSection;
                // $new_rating_template = new RatingTemplateSection();
                $new_rating_template->title = $value['title'];
                $new_rating_template->rating_template_id = $new_template->id;
                // dd();
                $new_rating_template->questions = json_encode(array_column($value['options'], 'line_record'));
                $new_rating_template->save();
                array_push($id, $new_rating_template->id);
                // code...
            }
            //not in delete
            $delete_rating = RatingTemplateSection::where('rating_template_id', '=', $new_template->id)->whereNotIn('id', $id)->get();
            foreach ($delete_rating as $keys => $val) {
                $val->delete();
            }

            // $new_rating_template->title =
            return response()->json(['status' => true, 'message' => 'Template saved successfully.']);
        }
        // return response('Fail', 500)->json(['status' => false, 'message' => 'Something went wrong. Please try again']);
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingTemplate $ratingTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        if ($id) {
            $categorySession = RatingTemplate::where('id', $id)->with(['template_option' => function ($q) {
                $q->select('questions', 'id', 'title', 'rating_template_id');
            }])->first();
            if ($categorySession && $categorySession->template_option) {
                $templateOptions = $categorySession->template_option->map(function ($option) {
                    $decodedQuestions = json_decode($option->questions, true);

                    // Restructure the data to match the desired format
                    $option->options = collect($decodedQuestions)->map(function ($question) {
                        return ['line_record' => $question]; // Wrap each item in an array with 'line_record' as the key
                    })->toArray();
                });
            }

            return view('backend.rating_template.create', ['categorySession' => $categorySession]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingTemplate $ratingTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        //
        // dd($id);
        $template = RatingTemplate::where('id', $id)->first();
        if ($template) {
            $sections = RatingTemplateSection::where('rating_template_id', '=', $id)->delete();
            $template->delete();

            return response()->json(['success' => true,
                'message' => 'Template deleted successfully.',
            ], 200);

        }

        return response()->json(['success' => false], 500);
    }

    public function copyTemplate($id): JsonResponse
    {
        //
        // dd($id);
        $template = RatingTemplate::where('id', $id)->first();
        if ($template) {
            $new_template = new RatingTemplate;
            $sections = RatingTemplateSection::where('rating_template_id', '=', $id)->get();
            $new_template->title = $template->title.'_1';
            $new_template->user_id = Auth::id();

            if ($new_template->save()) {

                foreach ($sections as $key => $value) {
                    $new_rating_template = new RatingTemplateSection;
                    $new_rating_template->title = $value->title;
                    $new_rating_template->rating_template_id = $new_template->id;
                    // dd();
                    $new_rating_template->questions = $value->questions;
                    $new_rating_template->save();
                    // code...
                }
                // $new_rating_template->title =

            }

            return response()->json(['success' => true,
                'message' => 'Template Copy successfully.',
            ], 200);

        }

        return response()->json(['success' => false], 500);
    }
}
