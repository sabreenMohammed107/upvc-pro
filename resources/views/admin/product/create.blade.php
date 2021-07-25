
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
                                    <span class="bread-blod">Products</span>
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
                
                {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div> --}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h3>Add New Product</h3>
                            <br />
                            @include('partials._errors')
                            <form action="{{ route('AdminProduct.store') }}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                 @method('POST')

                                <div class="form-group col-md-6">
                                    <label>Product Category</label>
                                    <div class="form-select-list">
                                        <select class="form-control custom-select-value" name="category_id">
                                            <option value="">Select Category ...</option>
                                            @foreach ($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->en_name}}</option>
                                            @endforeach 
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12"></div>
                                <div class="form-group col-md-6">
                                    <label>En Name</label>
                                    <input type="text" class="form-control" name="en_name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Name	</label>
                                    <input type="text" class="form-control" name="ar_name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>En Description	</label>
                                    <input type="text" class="form-control" name="en_description">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Description</label>
                                    <input type="text" class="form-control" name="ar_description">
                                </div>

                                {{-- <div class="form-group col-md-6">
                                    <label>Master Image</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn1').value = this.value;" name="master_image" >
                                            </div>
                                            <input type="text" id="append-small-btn1"  name="master_image"  >
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-group col-md-6">
                                    <label>Details Image</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn2').value = this.value;" name="product_details_img" >
                                            </div>
                                            <input type="text" id="append-small-btn2"  name="product_details_img"  >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Profile Image</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn3').value = this.value;" name="product_profile_img" >
                                            </div>
                                            <input type="text" id="append-small-btn3"  name="product_profile_img"  >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Thickness</label>
                                    <input type="text" class="form-control" name="thickness" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Chambers</label>
                                    <input type="text" class="form-control" name="chambers" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Glass</label>
                                    <input type="text" class="form-control"name="glass" >
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit"  id="user-save" value="submit" class="form-control mb-2 btn btn-primary">Submit</button>
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