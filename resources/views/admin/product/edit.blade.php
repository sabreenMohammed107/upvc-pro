
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
                        <div class="comment_form_area">
                            <h3>Edit Product</h3>
                            <br />
                            <form action="{{ route('AdminProduct.update',$product->id) }}" method="POST"  enctype="multipart/form-data">

                                {{ csrf_field() }}
                                 @method('PUT')
                               
                                 <div class="form-group col-md-6">
                                    <label>Product Category</label>
                                    <div class="form-select-list">
                                        <select class="form-control custom-select-value" name="account">
                                            @foreach ($category as $cat)
                                            <option value="{{$cat->id}}"  {{ $product ->category_id == $cat->id ? 'selected' : '' }} >{{$cat->en_name}}</option>
                                            @endforeach 
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12"></div>
                                <div class="form-group col-md-6">
                                    <label>En Name</label>
                                    <input type="text" class="form-control" name="en_name" value="en_name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Name	</label>
                                    <input type="text" class="form-control" name="ar_name" value="ar_name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>En Description	</label>
                                    <input type="text" class="form-control" name="en_description" value="en_description">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Description</label>
                                    <input type="text" class="form-control" name="ar_description" value="ar_description">
                                </div>

                                {{-- <div class="form-group col-md-6">
                                    <label>Master Image</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn1').value = this.value;" name="master_image" >
                                            </div>
                                            <input type="text" id="append-small-btn1"  name="master_image" value="master_image" >
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
                                            <input type="text" id="append-small-btn2"  name="product_details_img"  value="product_details_img">
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
                                            <input type="text" id="append-small-btn3"  name="product_profile_img" value="product_profile_img" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Thickness</label>
                                    <input type="text" class="form-control" name="thickness" value="thickness">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Chambers</label>
                                    <input type="text" class="form-control" name="chambers" value="chambers">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Glass</label>
                                    <input type="text" class="form-control"name="glass" value="glass">
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

@section('admin-scripts')


@endsection