<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home_vedio;
use Illuminate\Http\Request;

class Home_vedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_vedio = Home_vedio::all();
        return view("admin.home_vedio.index")->with("home_vedio",$home_vedio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.home_vedio.create");
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
        $home_vedio = Home_vedio::create($request_data);
        session()->flash('success', 'Home Vedio Data Added Succsessfuly');
        return redirect('/AdminHomeVedio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home_vedio  $home_vedio
     * @return \Illuminate\Http\Response
     */
    public function show(Home_vedio $home_vedio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home_vedio  $home_vedio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home_vedio = Home_vedio::find($id);
         return view("admin.home_vedio.edit")->with("home_vedio",$home_vedio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home_vedio  $home_vedio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home_vedio = Home_vedio::find($id);
        $home_vedio->update($request->all());
        session()->flash('success', 'Home vedio Data Updated Succsessfuly');
        return redirect('/AdminHomeVedio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home_vedio  $home_vedio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home_vedio = Home_vedio::find($id);

        $home_vedio->delete();
        session()->flash('success', 'Home Vedio Data Deleted Successfully');
        return redirect('/AdminHomeVedio');
    }
}
