@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'News List')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-sm btn-danger" style="color: white;" >Add More</a></li>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Youtube Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                     
                        <tbody>
                      
                          @foreach($news as $new)
                            <tr>
                                <td></td>
                                <td>@if(isset($new->image)){{$new->image ?? ''}}@else N/A @endif</td>
                                <td>@if(isset($new->title)){{$new->title ?? ''}}@else N/A @endif</td>
                                <td>@if(isset($new->description)){{$new->description ?? ''}}@else N/A @endif</td>
                                <td>@if(isset($new->youtube_link)){{$new->youtube_link ?? ''}}@else N/A @endif</td>
                                <td><a class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add News Feed</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('news.create')}}" method="post" enctype="multipart/form-data">
         @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">DESCRIPTION:</label>
            <textarea class="form-control summernote" id="description" name="description" required></textarea>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Youtube Link:</label>
            <input type="text" class="form-control" id="youtube_link" name="youtube_link" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create </button>
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
<link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.css') }}">
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
<script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>
<style>
    .icons-list div {line-height: 40px;white-space: nowrap;cursor: default;position: relative;z-index: 1;padding: 5px;border-right: 1px solid #252a33;}
    .icons-list div i {display: inline-block;width: 40px;margin: 0;text-align: center;vertical-align: middle;-webkit-transition: font-size 0.2s; -moz-transition: font-size 0.2s; transition: font-size 0.2s;}
    .icons-list div:hover i {font-size: 26px;}
</style>

@stop