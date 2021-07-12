<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News_letter;
use Illuminate\Http\Request;

class News_letterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news_letter = News_letter::all();
        return view("admin.news_letter.index")->with("news_letter",$news_letter);
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
     * @param  \App\Models\News_letter  $news_letter
     * @return \Illuminate\Http\Response
     */
    public function show(News_letter $news_letter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News_letter  $news_letter
     * @return \Illuminate\Http\Response
     */
    public function edit(News_letter $news_letter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News_letter  $news_letter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News_letter $news_letter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News_letter  $news_letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(News_letter $news_letter)
    {
        //
    }
}
