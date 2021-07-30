<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_key_feature;
use App\Models\Product;
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
    public function edit($id)
    {
        $product = Product::find($id);
        $keys = Product_key_feature::where('product_id',$id)->get();
        return view("admin.product_key.index", ["product"=>$product ,"keys"=>$keys]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_key_feature  $product_key_feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keys = Product_key_feature::find($id);
        $keys->update($request->all());
        session()->flash('success', 'Product Keys Updated Succsessfuly');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_key_feature  $product_key_feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
        $keys = Product_key_feature::find($id);
        $keys->delete();
        session()->flash('success', 'Product Keys Deleted Successfully');
        return back();

        } catch (QueryException $q) {

            session()->flash('success', 'Product Keys Not Deleted');
            return back();

        }
        
    }

    
}
