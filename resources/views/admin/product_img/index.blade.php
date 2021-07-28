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
                                    <span class="bread-blod">Products Images</span>
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
                            <br>
                            <a href="/AdminProduct" class="btn btn-primary mb-1"> Back  </a>
                            <br>
                            <h1>Product Images List</h1>
                            <br>
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
                                        <th> Order </th>
                                        <th>Image </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($imgs as $index=>$imgs)
                                        <tr>
                                            <td></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $imgs->order }}</td>
                                            {{-- <td><img src="{{ asset('uploads/product_imgs/'.$imgs->image) }}" style="width: 200px;height:100px"></td> --}}
                                            <td><img src="{{asset('uploads/product_imgs')}}/{{ $imgs->image }}" style="width: 200px;height:100px"></td>
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a data-toggle="modal" data-target="#edit-imgs{{$imgs->id}}" class="btn btn-warning mb-1"><i class="fa fa-edit"></i> Edit </a>
                                                @else
                                                    <a href="" class="btn btn-warning mb-1" disabled><i class="fa fa-edit"></i> Edit </a>
                                               @endif
                                                @if (Auth::user()->hasPermission('users-delete'))
                                                    <form action="{{ route('AdminProductImages.destroy',$imgs->id) }}" method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                    </form><!-- end of form -->
                                                @else
                                                    <button class="btn btn-danger disabled mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                @endif
                                                
                                               
                                            </td>
                                        </tr>
                                        <!--Edit Product Images-->
                                        <div id="edit-imgs{{$imgs->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header header-color-modal bg-color-2">
                                                        <h4 class="modal-title">Edit Product Images</h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('AdminProductImages.update',$imgs->id) }}" method="POST" enctype="multipart/form-data">
                                        
                                                            {{ csrf_field() }}
                                                            @method('PUT')
                                        
                                                            <div class="form-group col-md-12" style="display: none">
                                                                <input type="text" class="form-control" value="{{$imgs->product_id}}" name="product_id">
                                                            </div>

                                                            <div class="form-group col-md-7">
                                                                <label>Product Images</label>
                                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                    <div class="input append-small-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" onchange="document.getElementById('append-small-btn1').value = this.value;" value="{{$imgs->image}}" name="image" >
                                                                        </div>
                                                                        <input type="text" id="append-small-btn1"  name="image"  value="{{$imgs->image}}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-5">
                                                                <img src="{{ asset('uploads/products/'.$imgs->image) }}" style="width: 200px;height:100px"></td>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Order</label>
                                                                <input type="number" class="form-control" name="order" value="{{$imgs->order}}">
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
                                        <!--/Edit Product Images-->

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

