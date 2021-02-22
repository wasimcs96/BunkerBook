@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Add New Business')

@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="header">
            <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
            <ul class="header-dropdown dropdown">

                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                   {{-- <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);">Action</a></li>
                        <li><a href="javascript:void(0);">Another Action</a></li>
                        <li><a href="javascript:void(0);">Something else</a></li>
                    </ul> --}}
                </li>
            </ul>
            <div class="text-right">
                <a href="{{Route('business.add')}}" class="btn btn-primary">Add Business</a>
            </div>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8px;">#</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Featured: activate to sort column ascending" style="width: 57px;">Featured</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Listing Type: activate to sort column ascending" style="width: 41px;">Listing Type</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Profile: activate to sort column ascending" style="width: 128px;">Profile</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending" style="width: 38px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Email: activate to sort column ascending" style="width: 153px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Mobile: activate to sort column ascending" style="width: 96px;">Mobile</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Address: activate to sort column ascending" style="width: 66px;">Address</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Category: activate to sort column ascending" style="width: 57px;">Category</th>
                          <th style="width: 60px;" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Action: activate to sort column ascending">Action</th>
                        </tr>
                      </thead>
                    {{-- <thead>
                        <tr>
                            <th style="width: 8px;">#</th>
                            <th style="width: 57px;">Featured</th>
                            <th style="width: 41px;">Listing Type</th>
                            <th style="width: 128px;">Profile</th>
                            <th style="width: 38px;">Name</th>
                            <th style="width: 153px;">Email</th>
                            <th style="width: 96px;">Mobile</th>
                            <th style="width: 66px;">Address</th>
                            <th style="width: 57px;">Ctaegory</th>
                            <th style="width: 60px;">Action</th>
                        </tr>
                    </thead> --}}

                    <tbody>
                        @foreach($business_list as $business)
                        <tr>
                            <td>{{$business->id}}</td>
                            <td><input checked="" type="checkbox" value="id" onclick="makeFeature('id')" id="featured"></td>
                            <td>{{$business->type}}</td>

                            <td><img style="width: 150px;height: 100px;"
                                src="{{$business->profile}}">
                            </td>
                            <td>{{$business->name}}</td>
                            <td>{{$business->email}}</td>
                            <td>{{$business->mobile}}</td>
                            <td>{{$business->address}}</td>
                            <td>{{$business->category}}</td>
                            <td>
                              <a href="{{route('business.edit', $business->id)}}" class="btn btn-warning btn-sm">Edit</a>
                              <a href="{{route('business.delete', $business->id)}}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure want to delete this Business?');">Delete</a>
                              <a href="{{route('business.view', $business->id)}}" class="btn btn-info btn-sm">View Detail</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="rejectModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Reject Reason</h4>
        </div>
        <form method="post" action="{{route('business.reject.model', [$business->id])}}"></form>
        <div class="modal-body">

         <div class="form-group">
             <label>Reject reason</label>
             <textarea class="form-control" name="reject_reason" required=""></textarea>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-info">Submit</button>
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

