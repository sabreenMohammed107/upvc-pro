<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company_performance;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class Company_performanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_performance = Company_performance::all();
        return view("admin.company_performance.index")->with("company_performance",$company_performance);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.company_performance.create");
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

        // if ($request->image	) {
        //     Image::make($request->image	)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('uploads/company_performances/' . $request->image	->hashName()));
        //     $request_data['image'] = $request->image->hashName();
        // }

        if ($request->image) {
            $image=$request->file('image');
            $request_data['image']  = $this->UplaodFile($image);
        }

        $company_performance = Company_performance::create($request_data);
        session()->flash('success', 'Company Performance Added Succsessfuly');
        return redirect('/AdminCompanyPerformance');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company_performance  $company_performance
     * @return \Illuminate\Http\Response
     */
    public function show(Company_performance $company_performance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company_performance  $company_performance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company_performance = Company_performance::find($id);
         return view("admin.company_performance.edit")->with("company_performance",$company_performance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company_performance  $company_performance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company_performance = Company_performance::find($id);

        if($request->hasFile('image'))
        {
            //delete old
           $fileName=public_path('uploads/company_performances/'.$company_performance->image);
           File::delete($fileName);
           $fileDoc=$request->file('image');
           $company_performance->image= $this->UplaodFile($fileDoc);
        }
        $company_performance->update($request->except(['image']));
        session()->flash('success', 'Company Performance Data Updated Succsessfuly');
        return redirect('/AdminCompanyPerformance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company_performance  $company_performance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $company_performance = Company_performance::find($id);

        if ($company_performance->image != 'default.png') {
            $fileName=public_path('uploads/company_performances/'.$company_performance->image);
            File::delete($fileName);
        }//end of if

        $company_performance->delete();
        session()->flash('success', 'Company Performance Data Deleted Successfully');
        return redirect('/AdminCompanyPerformance');
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
      
		$uploadPath = public_path('uploads/company_performances');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
