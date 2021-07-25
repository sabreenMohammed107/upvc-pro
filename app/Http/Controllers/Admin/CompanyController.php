<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company = Company::where('id', 1)->first();
        return view("admin.company.index")->with("company",$company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        $company = Company::where('id', 1)->first();
         return view("admin.company.edit")->with("company",$company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'en_address'=> 'required',
            'ar_address'=> 'required',
            'phone'=> 'required',
            'mobile'=> 'required',
            'map_location'=> 'required',
            'email'=> 'required',
            'whatsapp'=> 'required',
            'header_en_address'=> 'required',
            'header_ar_address'=> 'required',
            'header_phone'=> 'required',
            // 'header_mobile'=> 'required',
            'facebook_url'=> 'required',
            'linkedin_url'=> 'required',
           'instgram_url'=> 'required',
        ]);
        

        $company = Company::where('id', 1)->first();
        $company->update($request->all());
        session()->flash('success', 'Company Data Updated Succsessfuly');
        return redirect('/AdminCompany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
