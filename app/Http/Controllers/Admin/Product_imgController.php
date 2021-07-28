<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_img;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class Product_imgController extends Controller
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

        if ($request->image) {
                $image=$request->file('image');
                $request_data['image']  = $this->UplaodFile($image);
        }

        $imgs = Product_img::create($request_data);
        session()->flash('success', 'Product Images Added Succsessfuly');
        return redirect('/AdminProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_img  $product_img
     * @return \Illuminate\Http\Response
     */
    public function show(Product_img $product_img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_img  $product_img
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $imgs = Product_img::where('product_id',$id)->get();
        return view("admin.product_img.index", ["product"=>$product ,"imgs"=>$imgs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_img  $product_img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imgs = Product_img::find($id);

        if($request->hasFile('image'))
        {
            //delete old
            $fileName=public_path('uploads/product_imgs/'.$imgs->image);
            File::delete($fileName);
           $fileDoc=$request->file('image');
           $imgs->image= $this->UplaodFile($fileDoc);
        }

        $imgs->update($request->except(['image','thumbnail']));
        session()->flash('success', 'Product Image Updated Succsessfuly');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_img  $product_img
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $imgs = Product_img::find($id);

        if ($imgs->image != 'default.png') {
            $fileName=public_path('uploads/product_imgs/'.$imgs->image);
            File::delete($fileName);
        }//end of if

        $imgs->delete();
        session()->flash('success', 'Product Image Deleted Successfully');
        return back();

        } catch (QueryException $q) {

            session()->flash('success', 'Product Image Not Deleted');
            return back();

        }
        
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
      
		$uploadPath = public_path('uploads/product_imgs');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
