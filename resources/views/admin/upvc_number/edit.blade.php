
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
                                    <span class="bread-blod">Home Upvc Number</span>
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
                            <h3>Edit Client</h3>
                            <br />
                            <form action="{{ route('AdminUpvcNumber.update',$upvc_no->id) }}" method="POST">

                                {{ csrf_field() }}
                                 @method('PUT')
                               
                                 <div class="form-group col-md-12">
                                    <label><input type="checkbox"  id="active" name="active"  value="1"  {{ ($upvc_no->active == 1 ? 'checked' : '')}}   /> Is Active </label>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>En Name</label>
                                    <input type="text" class="form-control" id="en_name" name="en_name"  value="{{$upvc_no->en_name}}" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Ar Name	</label>
                                    <input type="text" class="form-control" id="ar_name" name="ar_name"  value="{{$upvc_no->ar_name}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Number Value</label>
                                    <input type="number" class="form-control" name="no_value"  value="{{$upvc_no->no_value}}"  />
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