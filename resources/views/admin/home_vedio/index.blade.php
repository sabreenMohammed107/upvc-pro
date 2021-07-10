@extends('layouts.admin.layout')
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
                                    <span class="bread-blod">Home Vedio</span>
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

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd" @if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h1>Home vedio List</h1>
                            <div>
                                @if (Auth::user()->hasPermission('users-create'))
                                <a href="/AdminHomeVedio/create" class="btn btn-primary">Add New</a>
                                @else
                                <a href="" class="btn btn-primary" disabled>Add New</a>
                                @endif
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" @if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th> En Title </th>
                                        <th>Ar Title</th>
                                <th>Vedio </th>
                                <th>En Text</th>
                                <th>Ar Text	</th>
                                <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($home_vedio as $index=>$home_vedio)
                                        <tr>
                                            <td></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $home_vedio->en_title }}</td>
                                            <td>{{ $home_vedio->ar_title }}</td>
                                            <td>{{$home_vedio->vedio}}</td>
                                            <td>{{ $home_vedio->en_text }}</td>
                                            <td>{{ $home_vedio->ar_text }}</td>
                                            {{-- <td><img src="{{ $user->image_path }}" style="width: 100px;" class="img-thumbnail" alt=""></td> --}}
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a href="/AdminHomeVedio/{{$home_vedio->id}}/edit" class="btn btn-warning mb-1"><i class="fa fa-edit"></i> Edit </a>
                                                @else
                                                    <a href="" class="btn btn-warning mb-1" disabled><i class="fa fa-edit"></i> Edit </a>
                                               @endif
                                                @if (Auth::user()->hasPermission('users-delete'))
                                                    <form action="{{ route('AdminHomeVedio.destroy',$home_vedio->id) }}" method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                    </form><!-- end of form -->
                                                @else
                                                    <button class="btn btn-danger disabled mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                @endif
                                            </td>
                                        </tr>
                                    
                                    @endforeach
                                    </tbody>
        
                                </table><!-- end of table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

