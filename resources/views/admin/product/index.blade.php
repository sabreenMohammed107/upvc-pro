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

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd" @if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h1>Product List</h1>
                            <div>
                                @if (Auth::user()->hasPermission('users-create'))
                                <a href="/AdminProduct/create" class="btn btn-primary">Add New Product</a>
                                @else
                                <a href="" class="btn btn-primary" disabled>Add New Product</a>
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
                                        <th>  En Name </th>
                                        <th> Ar Name </th>
                                        <th>Category </th>
                                        {{-- <th>Master Img</th> --}}
                                        <th>Details Img	</th>
                                        <th>Profile Img</th>
                                        <th>Product Imgs</th>
                                        <th>Product Keys</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $index=>$product)
                                        <tr>
                                            <td></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $product->en_name }}</td>
                                            <td>{{ $product->ar_name }}</td>
                                            <td>{{ $product->Category->en_name ?? ""}}</td>
                                            {{-- <td><img src="{{ asset('uploads/products/'.$product->master_image) }}" style="width: 200px;height:100px"></td> --}}
                                            <td><img src="{{asset('uploads/products')}}/{{ $product->product_details_img }}" style="width: 200px;height:100px"></td>
                                            <td><img src="{{asset('uploads/products')}}/{{ $product->product_profile_img }}" style="width: 200px;height:100px"></td>
                                            {{-- <td><img src="{{ asset('uploads/products/'.$product->product_details_img) }}" style="width: 200px;height:100px"></td> --}}
                                            {{-- <td><img src="{{ asset('uploads/products/'.$product->product_profile_img) }}" style="width: 200px;height:100px"></td> --}}
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a href="" class="btn btn-primary mb-1" data-toggle="modal" data-target="#add-imgs{{$product->id}}"><i class="fa fa-edit"></i> Add Product Images  </a>
                                                    <br>
                                                    <a class="btn btn-primary mb-1"  href="/AdminProductImages/{{$product->id}}/edit"><i class="fa fa-eye"></i> Show Product Images  </a>
                                                @else
                                                    <a href="" class="btn btn-primary mb-1" disabled><i class="fa fa-edit"></i> Add Product Images </a>
                                               @endif
                                            </td>
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                <a href="" class="btn btn-primary mb-1" data-toggle="modal" data-target="#add-keys{{$product->id}}"><i class="fa fa-edit"></i> Add Key Features  </a>
                                                <br>
                                                    <a class="btn btn-primary mb-1"  href="/AdminProductKeyFeature/{{$product->id}}/edit"><i class="fa fa-eye"></i> Show Key Features  </a>
                                            @else
                                                <a href="" class="btn btn-primary mb-1" disabled><i class="fa fa-edit"></i> Add Key Features </a>
                                           @endif
                                            </td>
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a href="/AdminProduct/{{$product->id}}/edit" class="btn btn-warning mb-1"><i class="fa fa-edit"></i> Edit </a>
                                                @else
                                                    <a href="" class="btn btn-warning mb-1" disabled><i class="fa fa-edit"></i> Edit </a>
                                               @endif
                                                @if (Auth::user()->hasPermission('users-delete'))
                                                    <form action="{{ route('AdminProduct.destroy',$product->id) }}" method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                    </form><!-- end of form -->
                                                @else
                                                    <button class="btn btn-danger disabled mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                @endif
                                                
                                               
                                            </td>
                                        </tr>
                                        <!--Add Product Images-->
                                        <div id="add-imgs{{$product->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header header-color-modal bg-color-2">
                                                        <h4 class="modal-title">Add Product Images</h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('AdminProductImages.store') }}" method="POST" enctype="multipart/form-data">
                                        
                                                            {{ csrf_field() }}
                                                            @method('POST')
                                        
                                                            <div class="form-group col-md-12" style="display: none">
                                                                <input type="text" class="form-control" value="{{$product->id}}" name="product_id">
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Product Images</label>
                                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                    <div class="input append-small-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" onchange="document.getElementById('append-small-btn1').value = this.value;" name="image" >
                                                                        </div>
                                                                        <input type="text" id="append-small-btn1"  name="image">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Order</label>
                                                                <input type="number" class="form-control" name="order">
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
                                        <!--/Add Product Images-->


                                        <!--Add Key Features-->
                                        <div id="add-keys{{$product->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header header-color-modal bg-color-2">
                                                        <h4 class="modal-title">Add Key Features</h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('AdminProductKeyFeature.store') }}" method="POST">
                                        
                                                            {{ csrf_field() }}
                                                            @method('POST')
                                        
                                                            <div class="form-group col-md-12" style="display: none">
                                                                <input type="text" class="form-control" value="{{$product->id}}" name="product_id">
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Order</label>
                                                                <input type="number" class="form-control" name="order">
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>En Title</label>
                                                                <textarea id="en_title" name="en_title" > </textarea>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Ar Title</label>
                                                                <textarea id="ar_title" name="ar_title" > </textarea>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>En Feature</label>
                                                                <textarea id="en_feature" name="en_feature" > </textarea>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Ar Feature</label>
                                                                <textarea id="ar_feature" name="ar_feature" > </textarea>
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
                                        <!--/Add Product Images-->
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

