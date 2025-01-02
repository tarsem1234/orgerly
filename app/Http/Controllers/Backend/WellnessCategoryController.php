<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreWellnessCategoryRequest;
use App\Http\Requests\Backend\UpdateWellnessCategoryRequest;
// use App\Models\WellnessCategory;
use Illuminate\Http\Request;
use App\Models\Backend\WellnessCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class WellnessCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = WellnessCategory::latest()->get();

        return view('backend.learning_center.wellness.category_list',
            ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.learning_center.wellness.category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWellnessCategoryRequest $request): RedirectResponse
    {
        $category = new WellnessCategory;
        $category->category = $request->category;
        $category->description = $request->description;
        if ($category->save()) {
            return redirect()->route('admin.wellness_categories.index')->with('flash_success',
                'Category saved successfully.');
        }

        return redirect()->route('backend.wellness_categories.create')->with('flash_danger',
            'Category not saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(WellnessCategory $wellnessCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        if ($id) {
            $category = WellnessCategory::find($id);

            return view('backend.learning_center.wellness.category_create',
                ['category' => $category]);
        }
    }
    public function deactivate($id): RedirectResponse
    {
        if ($id) {
            $exist = WellnessCategory::find($id);
            if ($exist->count() > 0) {
                if ($exist->status == 1) {
                    if (WellnessCategory::where('id', $id)->update(['status' => 0])) {
                        return redirect()->route('admin.wellness_categories.index')->with('flash_success',
                            'Category deactivated successfully.');
                    }
                }
                if ($exist->status == 0) {
                    if (WellnessCategory::where('id', $id)->update(['status' => 1])) {
                        return redirect()->route('admin.wellness_categories.index')->with('flash_success',
                            'Category activated successfully.');
                    }
                }
            }

            return redirect()->back()->with('flash_success',
                'Category Updation Failed.');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWellnessCategoryRequest $request, int $id): RedirectResponse
    {
        //        dd($request->all());
        $input['category'] = $request->category;
        $input['description'] = $request->description;
        if (WellnessCategory::where('id', $id)->update($input)) {

            return redirect()->route('admin.wellness_categories.index')->with('flash_success',
                'Category updated successfully.');
        }

        return redirect()->back()->with('flash_success',
            'Category Updation Failed.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        if (WellnessCategory::where('id', $id)->delete()) {

            return response()->json(['success' => true, 'message' => 'Category deleted successfully'], 200);
        }

        return response()->json(['success' => true, 'message' => 'Category Deletion Failed'], 500);
    }
}
