<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_category;
use Illuminate\Http\Request;

class Product_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Product_category::all();
        return view("admin.product_category.index")->with("category",$category);
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
        
        $category = Product_category::create($request_data);
        session()->flash('success', 'Category Data Added Succsessfuly');
        return redirect('/AdminProductCategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show(Product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_category $product_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category =Product_category::find($id);

        $category->update($request->all());
        session()->flash('success', 'Category Data Updated Succsessfuly');
        return redirect('/AdminProductCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Product_category::find($id);

        $category->delete();
        session()->flash('success', 'Category Data Deleted Successfully');
        return redirect('/AdminProductCategory');
    }
}
