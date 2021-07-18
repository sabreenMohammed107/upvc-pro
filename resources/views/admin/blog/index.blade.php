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

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd" @if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h1>Blogs List</h1>
                            <div>
                                @if (Auth::user()->hasPermission('users-create'))
                                <a href="/AdminBlog/create" class="btn btn-primary">Add New</a>
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
                                        <th> Blog Date </th>
                                        <th> en_title </th>
                                        <th>ar_title</th>
                                <th>en_text</th>
                                <th>ar_text	</th>
                                <th>image </th>
                                <th>thumbnail</th>
                                <th>order</th>
                                <th>Active </th>
                                <th>Blog Tags </th>
                                <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog as $index=>$blog)
                                        <tr>
                                            <td></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $blog->blog_date }}</td>
                                            <td>{{ $blog->en_title }}</td>
                                            <td>{{ $blog->ar_title }}</td>
                                            <td>{{ $blog->en_text }}</td>
                                            <td>{{ $blog->ar_text }}</td>
                                            <td><img src="{{ asset('uploads/blogs/'.$blog->image) }}" style="width: 200px;height:100px"></td>
                                            <td><img src="{{ asset('uploads/blogs/'.$blog->thumbnail) }}" style="width: 200px;height:100px"></td>
                                            <td>{{ $blog->order }}</td>
                                            <td>{{ $blog->active }}</td>
                                            <td>
                                            @foreach ($blog->Tags as $tag)
                                            <label style="display: block">{{$tag->tag}}</label>
                                            @endforeach</td>
                                            
                                            {{-- <td><img src="{{ $user->image_path }}" style="width: 100px;" class="img-thumbnail" alt=""></td> --}}
                                            <td>
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a href="/AdminBlog/{{$blog->id}}/edit" class="btn btn-warning mb-1"><i class="fa fa-edit"></i> Edit </a>
                                                @else
                                                    <a href="" class="btn btn-warning mb-1" disabled><i class="fa fa-edit"></i> Edit </a>
                                               @endif
                                                @if (Auth::user()->hasPermission('users-delete'))
                                                    <form action="{{ route('AdminBlog.destroy',$blog->id) }}" method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                    </form><!-- end of form -->
                                                @else
                                                    <button class="btn btn-danger disabled mb-1"><i class="fa fa-trash"></i> Delete </button>
                                                @endif
                                                @if (Auth::user()->hasPermission('users-update'))
                                                    <a href="" class="btn btn-primary mb-1" data-toggle="modal" data-target="#add-tag{{$blog->id}}"><i class="fa fa-edit"></i> Add Tag  </a>
                                                @else
                                                    <a href="" class="btn btn-primary mb-1" disabled><i class="fa fa-edit"></i> Add Tag </a>
                                               @endif
                                            </td>
                                        </tr>
                                    <!--Add Tags-->
<div id="add-tag{{$blog->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-2">
                <h4 class="modal-title">Add Blog Tag</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('AdminBlogTag.store') }}" method="POST">

                    {{ csrf_field() }}
                    @method('POST')

                    <div class="form-group col-md-12" style="display: none">
                        <input type="text" class="form-control" value="{{$blog->id}}" name="blog_id">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Blog Tag</label>
                        <input type="text" class="form-control" name="tag">
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
<!--/Add Tags-->
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

