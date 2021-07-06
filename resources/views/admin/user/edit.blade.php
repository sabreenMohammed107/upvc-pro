
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
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area">
                            <h3>Edit User</h3>
                            <br />
                            <form action="{{ route('AdminUser.update',$user->id) }}" method="POST">

                                {{ csrf_field() }}
                                 @method('PUT')

                                <div class="form-group col-md-12">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" >
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>User Email</label>
                                    <input type="text" class="form-control" id="email" name="email"  value="{{ $user->email }}" >
                                    <span class="text-danger d-block" id="email-error"></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="admintab-wrap edu-tab1 mg-t-30">
                                        <label style="text-decoration: underline">Permissions</label>

                                    @php
                                    $models = ['users'];
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
                                            <label><input type="checkbox" name="permissions[]" {{ $user->hasPermission($model . '-' . $key) ? 'checked' : '' }} value="{{ $val }}"> {{ $key }} </label>
                                            @endforeach

                                        </div>

                                    @endforeach
                                    
                                        </div>
                                    </div>
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