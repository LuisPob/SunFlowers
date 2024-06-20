<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Region;
use App\Models\Province;
use App\Models\Commune;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    public function show()
    {
        // $regions = Region::all();
        $regions = Region::pluck('region_name', 'id');
        $provinces = Province::pluck('province_name', 'id');
        $communes = Commune::pluck('commune_name', 'id');
        // $company = Company::where('id', 1)->first();
        $company = Company::findOrFail(1);
        // dd($company);
        return view('content-managment.general-info', compact('company', 'regions', 'provinces', 'communes'));
    }

    public function update(Request $request)
    {
        $company = Company::findOrFail(1);
        request()->validate(Company::$rules);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $company->logo = $logoPath;
        }
        
        
        $company->company_name = $request->input('company_name');
        $company->address = $request->input('address');
        $company->region_id = $request->input('region_id');
        $company->province_id = $request->input('province_id');
        $company->commune_id = $request->input('commune_id');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->employees = $request->input('employees');
        $company->color_primary = $request->input('color_primary');
        $company->color_secondary = $request->input('color_secondary');
        $company->color_tertiary = $request->input('color_tertiary');
        
        $company->save();

        return back()->with('success', 'Información actualizada correctamente');
    }

   
}
