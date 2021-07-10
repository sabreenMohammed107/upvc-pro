
@extends("layouts.admin.layout")
@section('admin-content')

@if (app()->getLocale()=='ar')
<style>
    .form-group{
        text-align: right;
    }
    .form-control{
        text-align: right;
    }
    #distributor-save{
        text-align: center;
    }
   
</style>
@endif

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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h3>Add New Material</h3>
                            <br />
                            @include('partials._errors')
                            <form action="{{ route('AdminMaterial.store') }}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                 @method('POST')

                                <div class="form-group col-md-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                    <span class="text-danger d-block" id="logo-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Website</label>
                                    <input type="text" class="form-control" id="website_url" name="website_url" >
                                    <span class="text-danger d-block" id="website_url-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Active</label>
                                    <input type="text" class="form-control" id="active" name="active" >
                                    <span class="text-danger d-block" id="active-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit"  id="user-save" value="submit" class="form-control mb-2 btn btn-primary">Submit</button>
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

@section('admin-scripts')


@endsection