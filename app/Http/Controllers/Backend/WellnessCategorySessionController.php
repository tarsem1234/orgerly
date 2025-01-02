<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\WellnessCategory;
use App\Models\Backend\WellnessCategorySession;
use App\Http\Requests\Backend\SaveSessionWellnessSessionRequest;
use App\Http\Requests\Backend\StoreWellnessCategorySessionRequest;
use App\Models\Backend\WellnessCategorySessionQuestion;
use App\Models\Backend\WellnessCategorySessionQuestionOption;
use App\Models\Backend\UserLearningPoint;
// use App\Models\WellnessCategorySession;
// use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
class WellnessCategorySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index($categoryId = null): View
    {
        $sessions = WellnessCategorySession::whereHas('category', function ($query) {
            $query->where('status', 1)->with('category');
        });
        $category = null;
        if ($categoryId > 0) {
            $sessions->where('category_id', $categoryId);
            $category = WellnessCategory::find($categoryId);
        }
        $sessions = $sessions->latest()->get();

        return view('backend.learning_center.wellness.session_list', ['sessions' => $sessions, 'category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id): View
    {
        $category = WellnessCategory::find($id);

        return view('backend.learning_center.wellness.session_create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWellnessCategorySessionRequest $request): RedirectResponse
    {
        $data = $request->all();
        dd($data);
        $catIdExist = WellnessCategory::find($data['category_id']);
        if ($catIdExist) {
            $session = new WellnessCategorySession;
            $session->category_id = $data['category_id'];
            $session->name = $data['name'];
            $session->description = $data['description'];
            $session->points = $data['points'];
            if ($session->save()) {
                $sessionPoints = new UserLearningPoint;
                $sessionPoints->user_id = Auth::id();
                $sessionPoints->category_session_id = $session->id;
                $sessionPoints->points = $session->points;
                $sessionPoints->save();
                foreach ($data['questions'] as $question) {
                    $sessionQuestion = new WellnessCategorySessionQuestion;
                    $sessionQuestion->category_session_id = $session->id;
                    $sessionQuestion->question = $question['question'];
                    $sessionQuestion->type = config('constant.inverse_session_question_type.'.$question['type']);
                    if ($sessionQuestion->save()) {
                        foreach ($question['options'] as $option) {
                            $sessionQuestionOption = new WellnessCategorySessionQuestionOption;
                            $sessionQuestionOption->category_session_question_id = $sessionQuestion->id;
                            $sessionQuestionOption->title = $option['title'];
                            if (isset($option['correct_answer'])) {
                                $sessionQuestionOption->correct_answer = $option['correct_answer'];
                            }
                            $sessionQuestionOption->save();
                        }
                    }
                }

                return redirect()->route('admin.categories.index')->with('flash_success', 'Session saved successfully.');
            }
        }

        return redirect()->route('backend.categories.create')->with('flash_danger', 'Session not saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(WellnessCategorySession $wellnessCategorySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        if ($id) {
            $categorySession = WellnessCategorySession::where('id', $id)->with(['category', 'questions' => function ($q) {
                $q->whereHas('options')->with('options');
            }])->first();

            return view('backend.learning_center.wellness.session_create', ['categorySession' => $categorySession]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WellnessCategorySession $wellnessCategorySession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        if (WellnessCategorySession::where('id', $id)->delete()) {

            return response()->json(['success' => true, 'message' => 'Session deleted successfully'], 200);
        }

        return response()->json(['success' => true, 'message' => 'Session Deletion Failed'], 500);
    }
    public function saveSession(SaveSessionWellnessSessionRequest $request)
    {
        $data = $request->all();
        $catIdExist = WellnessCategory::find($data['category_id']);
        if ($catIdExist) {
            $session = WellnessCategorySession::find($data['id'] ?? 0) ?? new WellnessCategorySession;
            $session->category_id = $data['category_id'];
            $session->name = $data['name'];
            $session->description = $data['description'];
            $session->points = $data['points'];
            if ($session->save()) {
                $session->questions()->delete();
                foreach ($data['questions'] as $question) {
                    $sessionQuestion = new WellnessCategorySessionQuestion;
                    $sessionQuestion->wellness_category_session_id = $session->id;
                    $sessionQuestion->question = $question['question'];
                    $sessionQuestion->type = $question['type'];
                    if ($sessionQuestion->save()) {
                        $sessionQuestion->options()->delete();
                        foreach ($question['options'] as $option) {
                            $sessionQuestionOption = new WellnessCategorySessionQuestionOption;
                            $sessionQuestionOption->wellness_category_session_question_id = $sessionQuestion->id;
                            $sessionQuestionOption->title = $option['title'];
                            if (isset($option['correct_answer'])) {
                                $sessionQuestionOption->correct_answer = $option['correct_answer'];
                            }
                            $sessionQuestionOption->save();
                        }
                    }
                }

                return response()->json(['status' => true, 'message' => 'Session saved successfully.']);
            }
        }

        return response('Fail', 500)->json(['status' => false, 'message' => 'Something went wrong. Please try again']);
    }
    public function deactivate($id): RedirectResponse
    {

        if ($id) {
            $exist = WellnessCategorySession::find($id);
            if ($exist->count() > 0) {
                if ($exist->status == 1) {
                    if (WellnessCategorySession::where('id', $id)->update(['status' => 0])) {
                        return redirect()->route('admin.wellness_sessions.index')->with('flash_success', 'Session deactivated successfully.');
                    }
                }
                if ($exist->status == 0) {
                    if (WellnessCategorySession::where('id', $id)->update(['status' => 1])) {
                        return redirect()->route('admin.wellness_sessions.index')->with('flash_success', 'Session activated successfully.');
                    }
                }
            }

            return redirect()->back()->with('flash_success', 'Session activation/deactivation Failed.');
        }
    }
}
