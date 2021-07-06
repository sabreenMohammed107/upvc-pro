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
                        <form action="{{ route('AdminCompany.update',$company->id) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')

                            <div class="form-group col-md-6">
                                <label>@lang('site.name')</label>
                                <input type="text" class="form-control" id="name" name="name" value="">
                                <span class="text-danger d-block" id="name-error"> </span>
                            </div>

                            {{-- <div class="form-group col-md-6">
                                <label>@lang('site.ar-name')</label>
                                <input type="text" class="form-control" id="name_ar" name="name_ar" value=""disabled>
                                <span class="text-danger d-block" id="name-error"> </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>@lang('site.area')</label>

                                <input type="text" class="form-control" id="area" name="area" value=""disabled >
                                <span class="text-danger d-block" id="area-error"></span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>@lang('site.commercial_id')</label>
                                <input type="text" class="form-control" id="commercial_id" name="commercial_id" value="" disabled>
                                <span class="text-danger" id="commercial_id-error"> </span>

                            </div>

                            <div class="form-group col-md-6">
                                <label>@lang('site.tax_id')</label>

                                <span class="text-danger" id="tax_id-error"> </span>
                                <input type="text" class="form-control" id="tax_id" name="tax_id" value=""disabled>

                            </div>


                            <div class="form-group col-md-6">
                                <label>@lang('site.phone')</label>
                                <span class="text-danger" id="phone-error"> </span>
                                <input type="tel" class="form-control" id="phone" name="phone" value="" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label>@lang('site.mobile')</label>
                                <span class="text-danger" id="mobile-error"> </span>
                                <input type="tel" class="form-control" id="mobile" name="mobile" value="" disabled>
                            </div>


                            <div class="form-group col-md-6">
                                <label>@lang('site.fax')</label>
                                <span class="text-danger" id="fax-error"> </span>
                                <input type="tel" class="form-control" id="fax" name="fax" value="" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label>@lang('site.email')</label>
                                <span class="text-danger" id="emial-error"> </span>
                                <input type="email" class="form-control" id="emial" name="email"  value="" disabled>
                            </div>

                            
                            <div class="form-group col-md-6">
                                <label>@lang('site.year')</label>

                                <span class="text-danger" id="year-error"> </span>
                                <input type="text" class="form-control" id="year" name="year"  value="" disabled >

                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>@lang('site.sales')</label>

                                <span class="text-danger" id="sales-error"> </span>
                                <input type="text" class="form-control" id="sales" name="sales" value="" disabled>

                            </div>
                            <div class="form-group col-md-6">
                                <label>@lang('site.territory')</label>

                                <span class="text-danger" id="territory-error"> </span>
                                <input type="text" class="form-control" id="territory" name="territory" value="" disabled >

                            </div>

                           

                            <div class="form-group col-md-6">
                                <label>@lang('site.city')</label>
                                <span class="text-danger" id="city_id-error"> </span>
                                <select name="city_id" id="city_id" class="form-control" disabled>
                                    <option value="" ></option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label>@lang('site.location')</label>

                                <span class="text-danger" id="territory-error"> </span>
                                <input type="text" class="form-control" id="location" name="location" value=""  disabled >

                            </div>

                            
                            <div class="form-group col-md-12">
                                <label>@lang('site.core_business')</label>

                                <span class="text-danger" id="core_business-error"> </span>
                                <select name="core_business" id="core_business" class="form-control" disabled >
                                <option value=""></option>
                                <option value="@lang('site.core-business-1')"> @lang('site.core-business-1')</option>
                                <option value="@lang('site.core-business-2')"> @lang('site.core-business-2')</option>
                                <option value="@lang('site.core-business-3')"> @lang('site.core-business-3')</option>
                                <option value="@lang('site.core-business-4')"> @lang('site.core-business-4')</option>
                               </select>
                            </div>

                        
                            <div class="form-group col-md-12">
                                <label>@lang('site.branches')</label>
                                <span class="text-danger" id="branches-error"> </span>
                                <textarea class="form-control" id="branches" name="branches" disabled ></textarea>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="address">@lang('site.address')</label>
                                <span class="text-danger" id="address-error"> </span>
                                <textarea class="form-control" name="address" disabled></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="address">@lang('site.ar-address')</label>
                                <span class="text-danger" id="address-error"> </span>
                                <textarea class="form-control" name="address_ar" disabled></textarea>
                            </div> --}}

                            <div class="form-group col-md-12">
                                {{-- <button type="submit"  id="" value="submit" class="form-control btn btn-info mb-2 text-white" >Back</button> --}}
                                <a href="" title="View" class="btn btn-info" >@lang('site.back')</a>
                            </div>
                            {{-- <button id="basicInfoNoIcon" style="display: none">Info</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

