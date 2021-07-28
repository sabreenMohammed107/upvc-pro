<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company = Company::where('id', 1)->first();
        return view("admin.company.index")->with("company",$company);
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        $company = Company::where('id', 1)->first();
         return view("admin.company.edit")->with("company",$company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'en_address'=> 'required',
            'ar_address'=> 'required',
            'phone'=> 'required',
            'mobile'=> 'required',
            'map_location'=> 'required',
            'email'=> 'required',
            'whatsapp'=> 'required',
            'header_en_address'=> 'required',
            'header_ar_address'=> 'required',
            'header_phone'=> 'required',
            // 'header_mobile'=> 'required',
            'facebook_url'=> 'required',
            'linkedin_url'=> 'required',
           'instgram_url'=> 'required',
        ]);
        

        $company = Company::where('id', 1)->first();

        if($request->hasFile('about_image'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->about_image);
            File::delete($fileName);
           $fileDoc=$request->file('about_image');
           $company->about_image= $this->UplaodFile($fileDoc);
        }
        if($request->hasFile('story_image'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->story_image);
            File::delete($fileName);
           $fileDoc=$request->file('story_image');
           $company->story_image= $this->UplaodFile($fileDoc);
        }
        if($request->hasFile('mission_image'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->mission_image);
            File::delete($fileName);
           $fileDoc=$request->file('mission_image');
           $company->mission_image= $this->UplaodFile($fileDoc);
        }
        if($request->hasFile('vision_image'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->vision_image);
            File::delete($fileName);
           $fileDoc=$request->file('vision_image');
           $company->vision_image= $this->UplaodFile($fileDoc);
        }
        if($request->hasFile('company_catalogue_pdf'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->company_catalogue_pdf);
            File::delete($fileName);
           $fileDoc=$request->file('company_catalogue_pdf');
           $company->company_catalogue_pdf= $this->UplaodFile($fileDoc);
        }

        if($request->hasFile('company_profile_pdf'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->company_profile_pdf);
            File::delete($fileName);
           $fileDoc=$request->file('company_profile_pdf');
           $company->company_profile_pdf= $this->UplaodFile($fileDoc);
        }

        if($request->hasFile('ar_catalogue_pdf'))
        {
            //delete old
            $fileName=public_path('uploads/companies/'.$company->ar_catalogue_pdf);
            File::delete($fileName);
           $fileDoc=$request->file('ar_catalogue_pdf');
           $company->ar_catalogue_pdf= $this->UplaodFile($fileDoc);
        }

        $company->update($request->except(['about_image','story_image','mission_image','vision_image','company_catalogue_pdf','company_catalogue_pdf','company_profile_pdf','ar_catalogue_pdf']));
        session()->flash('success', 'Company Data Updated Succsessfuly');
        return redirect('/AdminCompany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
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
      
		$uploadPath = public_path('uploads/companies');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
