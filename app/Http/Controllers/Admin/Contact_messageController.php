<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_message;
use Illuminate\Http\Request;

class Contact_messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $c_msg = Contact_message::all();
        return view("admin.contact.index")->with("c_msg",$c_msg);
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
     * @param  \App\Models\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $c_msg = Contact_message::find($id);
        return view("admin.contact.show")->with("c_msg",$c_msg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact_message $contact_message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact_message $contact_message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_message $contact_message)
    {
        //
    }
}
