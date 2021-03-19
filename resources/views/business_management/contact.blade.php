@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Business Contact')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Business Contact List</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th class="col-lg-1">#</th>
                                <th class="col-lg-2">Title</th>
                                <th class="col-lg-3">User Name</th>
                                <th class="col-lg-2">Business Name</th>
                                <th class="col-lg-2">Message</th>
                                <th class="col-lg-2">Date</th>
                            </tr>
                        </thead>
                     
                        <tbody>
                      
                          @foreach($contacts as $key=>$contact)
                            
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>@if(isset($contact->title)){{ $contact->title ?? '' }}@else N/A @endif</td>
                            <td>@if(isset($contact->user->first_name)){{ $contact->user->first_name ?? '' }}@else N/A @endif  @if(isset($contact->user->last_name)){{ $contact->user->last_name ?? '' }}@else N/A @endif</td>
                            <td>@if(isset($contact->business->name)){{ $contact->business->name ?? '' }}@else N/A @endif</td>
                            <td>@if(isset($contact->message)){{ $contact->message ?? '' }}@else N/A @endif</td>
                            <td>@if(isset($contact->created_at))<?php $time=$contact->created_at->toDayDateTimeString();?> {{$time}}@else N/A @endif</td>
                          </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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

    <style type="text/css">
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

{{-- <script type="text/javascript">
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
</script> --}}
@stop