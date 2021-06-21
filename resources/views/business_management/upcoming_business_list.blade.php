@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Business Management')

@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="header">
            <h2>Upcoming Business List</h2>
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
                          <!-- <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Featured: activate to sort column ascending" style="width: 57px;">Featured</th> -->
                          <!-- <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Listing Type: activate to sort column ascending" style="width: 41px;">Listing Type</th> -->
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Profile: activate to sort column ascending" style="width: 128px;">Profile</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending" style="width: 38px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Email: activate to sort column ascending" style="width: 153px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                            aria-label="Mobile: activate to sort column ascending" style="width: 96px;">Mobile</th>
                          <!--<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"-->
                          <!--  aria-label="Address: activate to sort column ascending" style="width: 66px;">Address</th>-->
                          <!--<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"-->
                          <!--  aria-label="Category: activate to sort column ascending" style="width: 57px;">Category</th>-->
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
                        @foreach($business_list as $key=> $business)
                        <tr>
                            <td>{{$key+1}}</td>
                            <!-- <td><input checked="" type="checkbox" value="id" onclick="makeFeature('id')" id="featured"></td> -->
                            <!-- <td>{{$business->type}}</td> -->

                            <!-- <td><img style="width: 150px;height: 100px;"
                                src="{{asset($business->business_profile)}}">
                            </td> -->
                            <td>@if(isset($business->business_profile)&&file_exists($business->business_profile))<a href="{{asset($business->business_profile)}}" target="_blank" ><img src="{{ asset($business->business_profile)}}" style="width: 100px;" target="_blank" ></a>@else <img src="{{ asset('images/no_image/noimage.png')}}" style="width: 100px;"> @endif</td>
                            <td><a href="{{route('business.view',$business->id)}}">@if(isset($business->name)){{ $business->name ?? '' }}@else N/A @endif</a></td>
                            <td>@if(isset($business->email)){{$business->email ?? ''}}@else N/A @endif</td>
                            <td>@if(isset($business->mobile)){{$business->mobile ?? ''}}@else N/A @endif</td>
                            <!--<td>@if(isset($business->address)){{$business->address ?? ''}}@else N/A @endif</td>-->
                            <!--<td><?php  $category = $business->category; ?>@if(isset($business->category_name)){{$business->category_name ?? ''}}@else N/A @endif</td>-->
                            <td>
                                <button data-toggle="modal" data-target="#mdlerror{{$business->id ?? ''}}" class=" btn btn-danger btn-sm" >Approve</button>
                                <a href="javascript:void(0)" data-toggle="modal"
                                data-target="#rejectModal{{$business->id ?? ''}}" class="btn btn-warning btn-sm">Reject</a>
                                <a href="{{route('business.view',$business->id)}}"
                                class="btn btn-info btn-sm">View Detail</a></td>
                        </tr>

                        <div class="modal fade" id="mdlerror{{$business->id ?? ''}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                        
                              <div class="modal-body" style="
                              text-align:center;
                              padding: 0px;
                              ">
                                  <div style="
                                  padding: 0px;
                                  background-color: #fdb719;
                              ">
                                  <img  style=" width: 122px;margin-top: 18px;margin-bottom: 18px"; src="{{asset('frontEnd/assets/images/error.png')}}">
                                  </div>
                        
                                  <div style="
                                  background-color: white;
                                  color: #585550;
                                  font-family: sans-serif;
                              ">
                                      <h1>Are You Sure  ! </h1>
                                      <h4 style="
                        
                                      margin: 0px;
                                      font-size: large;
                                      "
                                  >You Want To Approve Selected Business</h4>
                                  </div>
                              </div>
                              <div class="modal-footer"  style="
                              padding: 0px;
                              border: 0px;
                              justify-content: center;
                              background-color: white;
                          ">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                {{-- <button type= class="btn btn-primary">Submit</button> --}}
                                <form action="{{route('business.status',$business->id)}}" method="POST">
                                  @csrf
                                  <input type="hidden" name="accept" value="1">
                                  {{-- <input type="hidden" name="business_id" value="{{$business->id ?? ''}}"> --}}

                                <button style="border-radius: 62px;
                                background-color: #fdb719;
                                border-color: #fdb719;
                                color: black;
                                font-weight: 500;
                          font-family: sans-serif;" type="submit" class="btn btn-primary accept"  id="add_document3">OK</button>
                          <button type="button"  style="border-radius: 62px;
                          background-color: #fdb719;
                          border-color: #fdb719;
                          color: black;
                          font-weight: 500;
                    font-family: sans-serif;"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </form>
                              </div>
                              </div>
                             </div>
                        </div>
                        
                        {{-- #############################ERROR --}}
                        <div id="rejectModal{{$business->id ?? ''}}" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                      
                            <!-- Modal content-->
                            <div class="modal-content">
                        
                              <div class="modal-body" style="
                              text-align:center;
                              padding: 0px;
                              ">
                                  <div style="
                                  padding: 0px;
                                  background-color: #fdb719;
                              ">
                                  <img  style=" width: 122px;margin-top: 18px;margin-bottom: 18px"; src="{{asset('frontEnd/assets/images/error.png')}}">
                                  </div>
                        
                                  <div style="
                                  background-color: white;
                                  color: #585550;
                                  font-family: sans-serif;
                              ">
                                      <h1>Are You Sure  ! </h1>
                                      <h4 style="
                        
                                      margin: 0px; 
                                      font-size: large;
                                      "
                                  >You Want To Reject Selected Business</h4>
                                  </div>
                              </div>
                              <div class="modal-footer"  style="
                              padding: 0px;
                              border: 0px;
                              justify-content: center;
                              background-color: white;
                          ">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                {{-- <button type= class="btn btn-primary">Submit</button> --}}
                                <form method="post"  action="{{route('business.request.reject',['id'=>$business->id])}}">
                                  @csrf
                                  <input type="hidden" name="reject" value="2">
                                  {{-- <input type="hidden" name="business_id" value="{{$business->id ?? ''}}"> --}}

                                <button style="border-radius: 62px;
                                background-color: #fdb719;
                                border-color: #fdb719;
                                color: black;
                                font-weight: 500;
                          font-family: sans-serif;" type="submit" class="btn btn-primary accept"  id="add_document3">OK</button>
                          <button type="button"  style="border-radius: 62px;
                          background-color: #fdb719;
                          border-color: #fdb719;
                          color: black;
                          font-weight: 500;
                    font-family: sans-serif;"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </form>
                              </div>
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

<div id="rejectModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Reject Reason</h4>
        </div>
        <form method="post" action="https://www.matrixmaritimemedia.com/bunkerbook/admin/Business/rejectbussiness/33"></form>
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
    {{-- <script>
      var accept=""
      
      
      
      $('.accept').click(function(){
      
      
          var accept = $(this).attr('acceptIB');
          var businessid = $(this).attr('businesID')
      console.log(accept);
      console.log(businessid);
      // document.getElementById(media_id).style.display="none";
      // console.log(media_id);
              $.ajaxSetup({
               headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                  });
                  $.ajax({
                      type: "post",
                      url: "{{route('business.status')}}",
                      data: {accept: accept, businessid:businessid},
                      success: function (result) {
                          console.log('success');
      
                      }
                  });
      
      
      
      });
       </script> --}}
@stop
