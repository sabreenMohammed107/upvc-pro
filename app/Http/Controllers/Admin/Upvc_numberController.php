<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Upvc_number;
use Illuminate\Http\Request;

class Upvc_numberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upvc_no = Upvc_number::all();
        return view("admin.upvc_number.index")->with("upvc_no",$upvc_no);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.upvc_number.create");
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
        $upvc_no = Upvc_number::create($request_data);
        session()->flash('success', 'UPVC Number Added Succsessfuly');
        return redirect('/AdminUpvcNumber');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upvc_number  $upvc_number
     * @return \Illuminate\Http\Response
     */
    public function show(Upvc_number $upvc_number)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upvc_number  $upvc_number
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $upvc_no = Upvc_number::find($id);
         return view("admin.upvc_number.edit")->with("upvc_no",$upvc_no);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upvc_number  $upvc_number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upvc_no = Upvc_number::find($id);

        if($request->active){
            $upvc_no->active=1;
        }else{
            $home_slider->active=0;
        }
        $upvc_no->update($request->all());
        session()->flash('success', 'UPVC Number Data Updated Succsessfuly');
        return redirect('/AdminUpvcNumber');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upvc_number  $upvc_number
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upvc_no = Upvc_number::find($id);

        $upvc_no->delete();
        session()->flash('success', 'UPVC Number Data Deleted Successfully');
        return redirect('/AdminUpvcNumber');
    }
}
