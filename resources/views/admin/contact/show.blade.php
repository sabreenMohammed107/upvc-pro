
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
                                    <span class="bread-blod">Clients</span>
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
                            <h3>View Contact Message</h3>
                            <br />
                            <form action="{{ route('AdminContact.show',$c_msg->id) }}" method="GET" >

                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $c_msg->name }}" >
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $c_msg->email }}" >
                                    <span class="text-danger d-block" id="email-error"> </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" value="{{ $c_msg->subject }}" >
                                    <span class="text-danger d-block" id="subject-error"> </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Message</label>
                                    <textarea id="message" name="message" > {{$c_msg->message}} </textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <a href="/AdminContact" title="View" class="btn btn-primary" >Back</a>
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