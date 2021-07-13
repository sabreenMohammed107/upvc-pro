
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
                                    <span class="bread-blod">Blogs</span>
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
                            <h3>Add New Blog</h3>
                            <br />
                            @include('partials._errors')
                            <form action="{{ route('AdminBlog.store') }}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                 @method('POST')

                                 <div class="form-group col-md-12">
                                    <label><input type="checkbox"  id="active" name="active"  value="1"  checked /> Is Active </label>
                                    <span class="text-danger d-block" id="active-error"></span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Blog Date</label>
                                    <input type="date" class="form-control" name="blog_date" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Order</label>
                                    <input type="number" class="form-control" name="order" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label>En Title</label>
                                    <input type="text" class="form-control" id="en_title" name="en_title">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Title	</label>
                                    <input type="text" class="form-control" id="ar_title" name="ar_title">
                                </div>

                                

                                <div class="form-group col-md-6">
                                    <label>En Text	</label>
                                    <textarea id="message" name="en_text" ></textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Text</label>
                                    <textarea id="message" name="ar_text" > </textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn').value = this.value;" name="image" >
                                            </div>
                                            <input type="text" id="append-small-btn"  name="image"  >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Thumbnail</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn2').value = this.value;" name="thumbnail" >
                                            </div>
                                            <input type="text" id="append-small-btn2"  name="thumbnail"  >
                                        </div>
                                    </div>
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