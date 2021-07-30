
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
                                    <span class="bread-blod">Feedback</span>
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
                            <h3>Edit Feedback</h3>
                            <br />
                            <form action="{{ route('AdminFeedback.update',$feedback->id) }}" method="POST"  enctype="multipart/form-data">

                                {{ csrf_field() }}
                                 @method('PUT')
                               
                                 <div class="form-group col-md-12">
                                    <label><input type="checkbox"  id="active" name="active"  value="1"  {{ ($feedback->active == 1 ? 'checked' : '')}}   /> Is Active </label>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                        <div class="input append-small-btn">
                                            <div class="file-button">
                                                Browse
                                                <input type="file" onchange="document.getElementById('append-small-btn').value = this.value;" name="image"  > 
                                            </div>
                                            <input type="text" id="append-small-btn"  name="image" placeholder="{{$feedback->image}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <img src="{{asset('uploads/feedback')}}/{{ $feedback->image }}" style="width: 200px;height:100px">
                                </div>
                                
                                <div class="form-group col-lg-12">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>En Title</label>
                                    <input type="text" class="form-control" id="en_title" name="en_name"  value="{{$feedback->en_name}}" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Title	</label>
                                    <input type="text" class="form-control" id="ar_title" name="ar_name"  value="{{$feedback->ar_name}}">
                                </div>

                                

                                <div class="form-group col-md-6">
                                    <label>En Text	</label>
                                    <textarea id="message" name="en_review"  value="" >{{$feedback->en_review}}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Text</label>
                                    <textarea id="message" name="ar_review"  value=""  >{{$feedback->ar_review}}</textarea>
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