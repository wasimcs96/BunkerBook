@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Category List')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                <ul class="header-dropdown dropdown">
                    {{-- <li><a href="javascript:void(0)"></li> --}}
                    <li><a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add More</a></li>
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                              
                            </tr>
                        </thead>
                     
                        <tbody>
                    
                           @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>@if(isset($category->icon))<a href="{{asset($category->icon)}}" target="_blank" ><img src="{{ asset($category->icon)}}" style="width: 100px;" target="_blank" ></a>@else <img src="{{ asset('images/no_image/noimage.png')}}" style="width: 100px;"> @endif</td>
                                <td>@if(isset($category->name)){{ $category->name ?? '' }}@else N/A @endif</td>
                                <td>@if(isset($category->description)){{ $category->description ?? '' }}@else N/A @endif</td>
                                <td><a href="javascript:void(0);" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal-{{ $category->id }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('category.delete',$category->id) }}" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></a></td>

                            </tr>
                            
                            <div class="modal fade" id="editModal-{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                                       @csrf
                                        <div class="mb-3">
                                          <label for="recipient-name" class="col-form-label">Name:</label>
                                          <input type="text" class="form-control" name="name" value="{{ $category->name ?? '' }}" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Description:</label>
                                          <textarea class="form-control" name="Description" id="message-text">{{ $category->description ?? '' }}</textarea>
                                        </div>
                              
                                        <div class="mb-3">
                                          <label for="recipient-name" class="col-form-label">icon image:</label>
                                          <input type="file" class="form-control" name="image" value="{{ $category->icon ?? '' }}" id="recipient-name">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                  </div>
                                </div>
                            </div>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('category.create') }}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" name="name" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Description:</label>
              <textarea class="form-control" name="Description" id="message-text"></textarea>
            </div>
  
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">icon image:</label>
              <input type="file" class="form-control" name="image" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
</div>

@stop

@section('page-styles')
<!-- <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}"> -->
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}"/>
<style>
    td.details-control {
    background: url('../assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('../assets/images/details_close.png') no-repeat center center;
    }
</style>
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<style>
    .icons-list div {line-height: 40px;white-space: nowrap;cursor: default;position: relative;z-index: 1;padding: 5px;border-right: 1px solid #252a33;}
    .icons-list div i {display: inline-block;width: 40px;margin: 0;text-align: center;vertical-align: middle;-webkit-transition: font-size 0.2s; -moz-transition: font-size 0.2s; transition: font-size 0.2s;}
    .icons-list div:hover i {font-size: 26px;}
</style>
@stop