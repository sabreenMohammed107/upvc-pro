
@extends("layouts.admin.layout")
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
                                    <span class="bread-blod">Materials</span>
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



    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row" style="background-color:white;border:solid #F6F8FA 15px">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area">
                            <h3>Edit Client</h3>
                            <br />
                            <form action="{{ route('AdminMaterial.update',$material->id) }}" method="POST"  enctype="multipart/form-data">

                                {{ csrf_field() }}
                                 @method('PUT')

                                <div class="form-group col-md-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $material->name }}" >
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>
                                
                                <div class="form-group col-md-8">
                                    <label>Logo</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn').value = this.value;" id="logo" name="logo"  value="{{ $material->logo }}">
                                            </div>
                                            <input type="text" id="append-small-btn" placeholder="{{ $material->logo }}" id="logo" name="logo"  value="{{ $material->logo }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group  col-md-4">
                                    <img src="{{ asset('uploads/materials/'.$material->logo) }}" style="width: 135px;height:80px">
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Website</label>
                                    <input type="text" class="form-control" id="website_url" name="website_url"   value="{{ $material->website_url }}" >
                                    <span class="text-danger d-block" id="website_url-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label><input type="checkbox"  id="active" name="active"  {{ ($material->active == 1 ? 'checked' : '')}}   value="1"  /> Is Active </label>
                                    <span class="text-danger d-block" id="active-error"></span>
                                </div>
                                
                                
                                
                                <div class="form-group col-md-12">
                                    <button type="submit"  value="submit" class="form-control mb-2 btn btn-primary">@lang('site.submit')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-scripts')


@endsection