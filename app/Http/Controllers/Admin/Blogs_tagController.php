<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs_tag;
use Illuminate\Http\Request;

class Blogs_tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request_data = $request->all();
        $tag = Blogs_tag::create($request_data);
        session()->flash('success', 'Blog Tag Added Succsessfuly');
        return redirect('/AdminBlog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogs_tag  $blogs_tag
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs_tag $blogs_tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogs_tag  $blogs_tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs_tag $blogs_tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogs_tag  $blogs_tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs_tag $blogs_tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogs_tag  $blogs_tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs_tag $blogs_tag)
    {
        //
    }
}
