
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
                                    <a href="#">@lang('site.home')</a> <span class="bread-slash">/</span>
                                </li>
                                <li>
                                    <span class="bread-blod">@lang('site.list-user')</span>
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
                            <h3>Add New User</h3>
                            <br />
                            @include('partials._errors')
                            <form action="{{ route('AdminUser.store') }}" method="POST">

                                {{ csrf_field() }}
                                 @method('POST')

                                <div class="form-group col-md-12">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email"  value="{{ old('email') }}" >
                                    <span class="text-danger d-block" id="email-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" name="password" >
                                    <span class="text-danger d-block" id="password-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                                    <span class="text-danger d-block" id="password-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="admintab-wrap edu-tab1 mg-t-30">
                                        <label style="text-decoration: underline">Permissions</label>

                                    @php
                                    $models = ['Users'];
                                    $maps = ['create'=> 1, 'read'=> 2, 'update'=> 3, 'delete'=> 4];
                                    @endphp

                                     <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1  mb-30">
                                    @foreach ($models as $index=>$model)
                                        <li class="{{ $index == 0 ? 'active' : '' }}"><a href="#{{ $model }}" data-toggle="tab" style="display: none">@lang('site.' . $model)</a></li>
                                    @endforeach
                                     </ul>
                                        <div class="tab-content">
                                            @foreach ($models as $index=>$model)

                                        <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">

                                            @foreach ($maps as $key => $val)
                                                <label><input type="checkbox" name="permissions[]" value="{{ $val }}"> {{ $key }} </label>
                                            @endforeach

                                        </div>

                                    @endforeach

                                        </div>
                                    </div>
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