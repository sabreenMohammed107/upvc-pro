<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view("admin.supplier.index")->with("supplier",$supplier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.supplier.create");
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

        if ($request->logo) {
            Image::make($request->logo)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/suppliers/' . $request->logo->hashName()));

            $request_data['logo'] = $request->logo->hashName();

            
        }
        $supplier = Supplier::create($request_data);
        session()->flash('success', 'Supplier Added Succsessfuly');
        return redirect('/AdminSupplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $supplier =Supplier::find($id);
         return view("admin.supplier.edit")->with("supplier",$supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier =Supplier::find($id);

        if($request->hasFile('logo'))
        {
            //delete old
$fileName=public_path('uploads/suppliers/'.$supplier->logo);
File::delete($fileName);
           $fileDoc=$request->file('logo');
           $supplier->logo= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $supplier->active=1;
        }else{
            $supplier->active=0;
        }
        $supplier->update($request->except(['logo']));
        session()->flash('success', 'Supplier Data Updated Succsessfuly');
        return redirect('/AdminSupplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier =Supplier::find($id);

        if ($supplier->logo != 'default.png') {
            $fileName=public_path('uploads/suppliers/'.$supplier->logo);
            File::delete($fileName);
        }//end of if

        $supplier->delete();
        session()->flash('success', 'Client Deleted Successfully');
        return redirect('/AdminSupplier');
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
      
		$uploadPath = public_path('uploads/suppliers');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
