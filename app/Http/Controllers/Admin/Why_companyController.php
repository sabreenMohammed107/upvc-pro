<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Why_company;
use Illuminate\Http\Request;

class Why_companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $why_company = Why_company::all();
        return view("admin.why_company.index")->with("why_company",$why_company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.why_company.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        $why_company = Why_company::create($request_data);
        session()->flash('success', 'Why Company Added Succsessfuly');
        return redirect('/AdminWhyCompany');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Why_company  $why_company
     * @return \Illuminate\Http\Response
     */
    public function show(Why_company $why_company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Why_company  $why_company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $why_company = Why_company::find($id);
         return view("admin.why_company.edit")->with("why_company",$why_company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Why_company  $why_company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $why_company = Why_company::find($id);
        $why_company->update($request->all());
        session()->flash('success', 'Why Company Data Updated Succsessfuly');
        return redirect('/AdminWhyCompany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Why_company  $why_company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $why_company = Why_company::find($id);

        $why_company->delete();
        session()->flash('success', 'Why Company Data Deleted Successfully');
        return redirect('/AdminWhyCompany');
    }
}
