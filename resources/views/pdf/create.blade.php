@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Add New Document')

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Add PDF</h2>
                <ul class="header-dropdown dropdown">

                    <li>
                        <a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    {{-- <a  href="{{ asset('assets/default/SampleCsv.xlsx') }}" class="btn btn-warning btn-flat" download>Sample CSV</a> --}}
                    {{-- <a href="{{Route('business.add')}}" class="btn btn-primary">Add Business</a> --}}
                </ul>
            </div>
            <div class="body">
                <form action="{{ route('admin.pdf.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
            
              
                    <div class="form-group">
                        <label>File Name</label>
                        
                        <input type="name" name="file_name" maxlength="150" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label>Upload PDF</label>
                        
                        <input type="file" name="file[]" accept="application/pdf" class="form-control" style="padding-bottom: 33px;" multiple required>
                    </div>

                    <button type="submit" class="btn btn-primary">Upload </button>
                    <a href="{{route('business.upcoming')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>

</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}"/>

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>

<script>
    function makeFeature(ID)
    {
        var value=0;
        if ($('#featured'+ID).is(':checked')) {
            value=1

        }

       $.ajax({
               type:'POST',
               url:site_url+'admin/Business/make_featured',
               data:{'value':value,'ID':ID},

               success:function(resp)
               {

               }
           });


    }
    </script>
@stop

