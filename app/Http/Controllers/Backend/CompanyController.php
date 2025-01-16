<?php

namespace App\Http\Controllers\Backend;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreCompanyRequest;
// use App\Http\Requests\Backend\UpdateCompanyRequest;
use App\Models\Backend\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $companies = Company::latest()->get();

        return view('backend.company.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request): RedirectResponse
    {

        $checkIfComp = Company::where('name', $request->company)->first();
        if ($checkIfComp != null) {
            return redirect()->route('admin.companies.create')->with('flash_warning',
                'Company already exists.');
        }

        $company = new Company;
        $company->name = $request->company;
        if ($company->save()) {
            return redirect()->route('admin.companies.index')->with('flash_success',
                'Company saved successfully.');
        }

        return redirect()->route('backend.companies.create')->with('flash_danger',
            'Company not saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        if ($id) {
            $company = Company::find($id);

            return view('backend.company.create', ['company' => $company]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCompanyRequest $request, int $id): RedirectResponse
    {
        //
        $input['name'] = $request->company;
        if (Company::where('id', $id)->update($input)) {

            return redirect()->route('admin.companies.index')->with('flash_success',
                'Company updated successfully.');
        }

        return redirect()->back()->with('flash_success',
            'Company Updation Failed.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        if (Company::where('id', $id)->delete()) {

            return response()->json(['success' => true, 'message' => 'Company deleted successfully'],
                200);
        }

        return response()->json(['success' => true, 'message' => 'Company Deletion Failed'],
            500);
    }
}
