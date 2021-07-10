@extends('layouts.admin.layout')
@section('admin-content')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                                <li>
                                    <a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li>
                                    <span class="bread-blod">Company</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Static Table Start -->
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row" style="background-color:white;border:solid #F6F8FA 15px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <div class="comment_form_area"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                        <h3>Company Data</h3>
                        <br />
                        <div class="main-sparkline13-hd">
                            @if (Auth::user()->hasPermission('users-create'))
                            <a href="/AdminCompany/{{$company->id}}/edit" class="btn btn-primary">Edit Company Data</a>
                            @else
                            <a href="" class="btn btn-primary" disabled>Edit Company Data</a>
                            @endif
                        </div>
                        <br />
                        <form action="{{ route('AdminCompany.update',$company->id) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')

                            <div class="form-group col-md-6">
                                <label>En Address</label>
                                <textarea id="en_address" name="en_address" disabled> {{$company->en_address}} </textarea>
                                <span class="text-danger d-block" id="en_address-error"> </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Ar Address</label>
                                <textarea id="ar_address" name="ar_address" disabled> {{$company->ar_address}} </textarea>
                                <span class="text-danger d-block" id="ar_address-error"> </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <span class="text-danger" id="phone-error"> </span>
                                <input type="tel" class="form-control" id="phone" name="phone" value="" placeholder="{{$company->phone}}" disabled >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Mobile</label>
                                <span class="text-danger" id="mobile-error"> </span>
                                <input type="tel" class="form-control" id="mobile" name="mobile" value="" placeholder="{{$company->mobile}}" disabled>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Map Location</label>
                                <span class="text-danger" id="map_location-error"> </span>
                                <textarea type="text" id="map_location" name="map_location"  disabled > {{$company->map_location}} </textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <span class="text-danger" id="email-error"> </span>
                                <input type="text" class="form-control" id="email" name="email"  disabled placeholder="{{$company->email}} " />

                            </div>

                            <div class="form-group col-md-6">
                                <label>Whats app</label>
                                <span class="text-danger" id="whatsapp-error"> </span>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"  disabled placeholder="{{$company->whatsapp}} " />

                            </div>

                            <div class="form-group col-md-6">
                                <label>Header En Address</label>
                                <span class="text-danger" id="header_en_address-error"> </span>
                                <textarea type="text" id="header_en_address" name="header_en_address"  disabled > {{$company->header_en_address}} </textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Header Ar Address</label>
                                <span class="text-danger" id="header_ar_address-error"> </span>
                                <textarea type="text" id="header_ar_address" name="header_ar_address"  disabled > {{$company->header_ar_address}} </textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Header Phone</label>
                                <span class="text-danger" id="header_phone-error"> </span>
                                <input type="tel" class="form-control" id="header_phone" name="header_phone" value="" placeholder="{{$company->header_phone}}" disabled >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Header Mobile</label>
                                <span class="text-danger" id="header_mobile-error"> </span>
                                <input type="tel" class="form-control" id="header_mobile" name="header_mobile" value="" placeholder="{{$company->header_mobile}}" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Facebook Url</label>
                                <span class="text-danger" id="facebook_url-error"> </span>
                                <input type="tel" class="form-control" id="facebook_url" name="facebook_url" value="" placeholder="{{$company->facebook_url}}" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Linkedin Url</label>
                                <span class="text-danger" id="linkedin_url-error"> </span>
                                <input type="tel" class="form-control" id="linkedin_url" name="linkedin_url" value="" placeholder="{{$company->linkedin_url}}" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Instgram Url</label>
                                <span class="text-danger" id="instgram_url-error"> </span>
                                <input type="tel" class="form-control" id="instgram_url" name="instgram_url" value="" placeholder="{{$company->instgram_url}}" disabled>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

