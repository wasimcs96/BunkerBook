@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'News Feed')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>News List</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-sm btn-danger" style="color: white;" >Add More</a></li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th class="col-lg-1">#</th>
                                <th class="col-lg-2">Image</th>
                                <th class="col-lg-2">Title</th>
                                <th class="col-lg-3" style="text-align: center;">Description</th>
                                <th class="col-lg-2">Youtube Link</th>
                                <th class="col-lg-2">Actions</th>
                            </tr>
                        </thead>
                     
                        <tbody>
                      
                          @foreach($news as $key=>$new)
                            <tr>
                                <td class=" ">{{$key+1}}</td>
                                <!-- <td class=""><img src="{{asset($new->image ?? '')}}" width="100px;"></td> -->
                                <td>@if(isset($new->image)&&file_exists($new->image))<a href="{{asset($new->image)}}" target="_blank" ><img src="{{ asset($new->image)}}" style="width: 100px;" target="_blank" ></a>@else <img src="{{ asset('images/no_image/noimage.png')}}" style="width: 100px;"> @endif</td>
                                <td class="">@if(isset($new->title)){{$new->title ?? ''}}@else N/A @endif</td>
                                <td class="col-lg-3" style="text-align: center;">       
                                  <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#descModal-{{$new->id ?? ''}}" class="btn btn-sm btn-warning" style="color: white;" ><span class="btn-label">
                                    <i class="fa fa-eye"></i>
                                    </span></a></td>
                                <td class="">@if(isset($new->youtube_link))<a href=" {{$new->youtube_link ?? ''}}" target="_blank">Visit</a>@else N/A @endif</td>
                                <td class=""><a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#editModal-{{$new->id ?? ''}}" class="btn btn-sm btn-warning" style="color: white;" ><span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                        </span></a>
                                <a href="{{route('news.destroy',$new->id)}}"class="btn btn-sm btn-danger"><span class="btn-label">
                                <i class="fa fa-trash-o"></i>
                                        </span></a></td>
                            </tr>
                       
<div class="modal fade" id="editModal-{{$new->id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit News Feed</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('news.update',$new->id)}}" method="post" enctype="multipart/form-data">
         @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$new->title ?? ''}}">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">DESCRIPTION:</label>
            <textarea class="form-control summernote" id="description" name="description">{!! $new->description !!}</textarea>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Youtube Link:</label>
            <input type="text" class="form-control" id="youtube_link" name="youtube_link" value="{{$new->youtube_link ?? ''}}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image"value="{{asset($new->image ?? '')}}">
          </div>
          <div class="mb-3" style="display: flex;justify-content: center;">
          <img src="{{asset($new->image ?? '')}}" width="100px;">
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
{{-- ##########################description --}}
                  
<div class="modal fade" id="descModal-{{$new->id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> {{$new->title ?? ''}} </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{-- <form action="{{route('event.update',$new->id)}}" method="post" enctype="multipart/form-data"> --}}
         {{-- @csrf --}}
              <div class="mb-3">
            <label for="message-text" class="col-form-label">DESCRIPTION:</label>
            {{-- <textarea class="form-control summernote" id="description" name="description"></textarea> --}}
            <div class="container">
              {!! $new->description!!}
            </div>
          </div>

        
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
      </div>
        </form>
    </div>
  </div>
</div>

{{-- ####################Description --}}
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
            <input type="text" class="form-control" id="youtube_link" name="youtube_link" >
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

    /* <style type="text/css"> */
    .read-more-show{
      cursor:pointer;
      color: #ed8323;
    }
    .read-more-hide{
      cursor:pointer;
      color: #ed8323;
    }

    .hide_content{
      display: none;
    }
</style>
{{-- </style> --}}
<style>
    .icons-list div {line-height: 40px;white-space: nowrap;cursor: default;position: relative;z-index: 1;padding: 5px;border-right: 1px solid #252a33;}
    .icons-list div i {display: inline-block;width: 40px;margin: 0;text-align: center;vertical-align: middle;-webkit-transition: font-size 0.2s; -moz-transition: font-size 0.2s; transition: font-size 0.2s;}
    .icons-list div:hover i {font-size: 26px;}
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

<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
@stop