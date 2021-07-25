<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_key_feature;
use Illuminate\Http\Request;

class Product_key_featureController extends Controller
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

        $keys = Product_key_feature::create($request_data);
        session()->flash('success', 'Product keys Added Succsessfuly');
        return redirect('/AdminProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_key_feature  $product_key_feature
     * @return \Illuminate\Http\Response
     */
    public function show(Product_key_feature $product_key_feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_key_feature  $product_key_feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_key_feature $product_key_feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_key_feature  $product_key_feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_key_feature $product_key_feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_key_feature  $product_key_feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_key_feature $product_key_feature)
    {
        //
    }
}
