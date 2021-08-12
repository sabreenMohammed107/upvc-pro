<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_category;

use App\Models\Product_img;
use App\Models\Product_key_feature;
use Illuminate\Http\Request;

use Illuminate\Database\QueryException;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $category = Product_category::all();
        return view("admin.product.index", ["product"=>$product ,"category"=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Product_category::all();
        return view("admin.product.create", ["category"=>$category]);
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

        // if ($request->master_image) {
        //     Image::make($request->master_image)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('uploads/products/' . $request->master_image->hashName()));
        //     $request_data['master_image'] = $request->master_image->hashName();
        // }

        // if ($request->product_details_img) {
        //     Image::make($request->product_details_img)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('uploads/products/' . $request->product_details_img->hashName()));
        //     $request_data['product_details_img'] = $request->product_details_img->hashName();
        // }

        // if ($request->product_profile_img) {
        //     Image::make($request->product_profile_img)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('uploads/products/' . $request->product_profile_img->hashName()));
        //     $request_data['product_profile_img'] = $request->product_profile_img->hashName();
        // }


        if ($request->master_image) {
            $master_image=$request->file('master_image');
            $request_data['master_image']  = $this->UplaodFile($master_image);
        }
        if ($request->product_details_img) {
            $product_details_img=$request->file('product_details_img');
            $request_data['product_details_img']  = $this->UplaodFile($product_details_img);
        }
        if ($request->product_profile_img) {
            $product_profile_img=$request->file('product_profile_img');
            $request_data['product_profile_img']  = $this->UplaodFile($product_profile_img);
        }

        $product = Product::create($request_data);

        session()->flash('success', 'Product Data Added Succsessfuly');
        return redirect('/AdminProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Product_category::all();
        return view("admin.product.edit", ["product"=>$product ,"category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
        $product = Product::find($id);

        if($request->hasFile('master_image'))
        {
          
           $fileDoc=$request->file('master_image');
           $product->master_image= $this->UplaodFile($fileDoc);
        }

        if($request->hasFile('product_details_img'))
        {
            
           $fileDoc=$request->file('product_details_img');
           $product->product_details_img= $this->UplaodFile($fileDoc);
        }

        if($request->hasFile('product_profile_img'))
        {
          
           $fileDoc=$request->file('product_profile_img');
           $product->product_profile_img= $this->UplaodFile($fileDoc);
        }

        $product->update($request->except(['master_image','product_details_img','product_profile_img']));
        session()->flash('success', 'Product Data Updated Succsessfuly');
        return redirect('/AdminProduct');

    } catch (QueryException $q) {

        session()->flash('success', 'Product Data Not Deleted Successfully Related with Blog tags');
        return redirect('/AdminProduct');

    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->Product_img()->delete();
        $product->Product_key_feature()->delete();

        if ($product->master_image != 'default.png') {
            $fileName=public_path('uploads/products/'.$product->master_image);
            File::delete($fileName);
        }//end of if

        if ($product->product_details_img != 'default.png') {
            $fileName=public_path('uploads/products/'.$product->product_details_img);
            File::delete($fileName);
        }//end of if

        if ($product->product_profile_img != 'default.png') {
            $fileName=public_path('uploads/products/'.$product->product_profile_img);
            File::delete($fileName);
        }//end of if

        $product->delete();
        session()->flash('success', 'Product Data Deleted Successfully');
        return redirect('/AdminProduct');
    }
    public function UplaodFile($file_request)
	{
		//  This is Image Info..
		$file = $file_request;
		$name = $file->getClientOriginalName();
		$ext  = $file->getClientOriginalExtension();
		$size = $file->getSize();
		$path = $file->getRealPath();
		$mime = $file->getMimeType();


		// Rename The Image ..
        $imageName = $name;

		$uploadPath = public_path('uploads/products/');

		// Move The image..
		  $file->move($uploadPath, $imageName);

        return $imageName;
    }
}
