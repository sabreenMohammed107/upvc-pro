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
                                    <span class="bread-blod">Product Category</span>
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
                            <h1>Product Category</h1>
                            <div>
                                @if (Auth::user()->hasPermission('users-create'))
                                <a class="btn btn-primary" data-toggle="modal" data-target="#add-category">Add New</a>
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
                                <th>En Name </th>
                                <th>Ar Name </th>
                                <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $index=>$category)
                                        <tr>
                                            <td></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $category->en_name }}</td>
                                            <td>{{ $category->ar_name }}</td>
                                            
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a  class="btn btn-warning mb-1" data-toggle="modal" data-target="#edit-category{{$category->id}}"><i class="fa fa-edit"></i> Edit </a>
                                                @else
                                                    <a href="" class="btn btn-warning mb-1" disabled><i class="fa fa-edit"></i> Edit </a>
                                               @endif
                                                @if (Auth::user()->hasPermission('users-delete'))
                                                    <form action="{{ route('AdminProductCategory.destroy',$category->id) }}" method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                    </form><!-- end of form -->
                                                @else
                                                    <button class="btn btn-danger disabled mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                @endif
                                            </td>
                                        </tr>
                                    <!--Edit Category-->
                                    <div id="edit-category{{$category->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header header-color-modal bg-color-2">
                                                    <h4 class="modal-title">Edit Category</h4>
                                                    <div class="modal-close-area modal-close-df">
                                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('AdminProductCategory.update',$category->id) }}" method="POST">
                                    
                                                        {{ csrf_field() }}
                                                        @method('PUT')
                                    
                                                        <div class="form-group col-md-12" style="display: none">
                                                            <input type="text" class="form-control" value="{{$category->id}}" name="id">
                                                        </div>
                                    
                                                        <div class="form-group col-md-12">
                                                            <label>En Name</label>
                                                            <input type="text" class="form-control" name="en_name">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label>Ar Name</label>
                                                            <input type="text" class="form-control" name="ar_name">
                                                        </div>
                                    
                                                        <div class="form-group col-md-12">
                                                            <button type="submit"  value="submit" class="form-control mb-2 btn btn-primary">Submit</button>
                                                        </div>
                                    
                                                    </form>
                                                </div>
                                                <div class="modal-footer info-md">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Edit Category-->
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

<!--Add Category-->
<div id="add-category" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-2">
                <h4 class="modal-title">Add Category</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('AdminProductCategory.store') }}" method="POST">

                    {{ csrf_field() }}
                    @method('POST')

                    
                    <div class="form-group col-md-12">
                        <label>En Name</label>
                        <input type="text" class="form-control" name="en_name">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Ar Name</label>
                        <input type="text" class="form-control" name="ar_name">
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit"  value="submit" class="form-control mb-2 btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer info-md">
            </div>
        </div>
    </div>
</div>
<!--/Add Category-->

@endsection

