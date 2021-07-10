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
                        <h3>Edit Company Data</h3>
                        <br />
                        <form action="{{ route('AdminCompany.update',$company->id) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')

                            <div class="form-group col-md-6">
                                <label>En Address</label>
                                @error('en_address')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <textarea id="en_address" name="en_address"  > {{$company->en_address}} </textarea>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>Ar Address</label>
                                @error('ar_address')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <textarea id="ar_address" name="ar_address" > {{$company->ar_address}} </textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                @error('phone')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{$company->phone}}"  >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Mobile</label>
                                @error('mobile')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="tel" class="form-control" id="mobile" name="mobile" value="{{$company->mobile}}" >
                            </div>

                            <div class="form-group col-md-12">
                                <label>Map Location</label>
                                @error('map_location')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <textarea type="text" id="map_location" name="map_location"   > {{$company->map_location}} </textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Email</label>
                                @error('email')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="text" class="form-control" id="email" name="email"   value="{{$company->email}} " />

                            </div>

                            <div class="form-group col-md-6">
                                <label>Whats app</label>
                                @error('whatsapp')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"   value="{{$company->whatsapp}} " />

                            </div>

                            <div class="form-group col-md-6">
                                <label>Header En Address</label>
                                @error('header_en_address')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <textarea type="text" id="header_en_address" name="header_en_address"   > {{$company->header_en_address}} </textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Header Ar Address</label>
                                @error('header_ar_address')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <textarea type="text" id="header_ar_address" name="header_ar_address"   > {{$company->header_ar_address}} </textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Header Phone</label>
                                @error('header_phone')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <span class="text-danger" id="header_phone-error"> </span>
                                <input type="tel" class="form-control" id="header_phone" name="header_phone" value="{{$company->header_phone}}"  >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Header Mobile</label>
                                @error('header_mobile')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <input type="tel" class="form-control" id="header_mobile" name="header_mobile" value="{{$company->header_mobile}}" >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Facebook Url</label>
                                @error('facebook_url')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <input type="tel" class="form-control" id="facebook_url" name="facebook_url" value="{{$company->facebook_url}}" >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Linkedin Url</label>
                                @error('linkedin_url')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <input type="tel" class="form-control" id="linkedin_url" name="linkedin_url" value="{{$company->linkedin_url}}" >
                            </div>

                            <div class="form-group col-md-6">
                                <label>Instgram Url</label>
                                @error('instgram_url')
                                <span class="invalid-feedback text-danger d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                                <input type="tel" class="form-control" id="instgram_url" name="instgram_url" value="{{$company->instgram_url}}" >
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit"  value="submit" class="form-control mb-2 btn btn-primary">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

