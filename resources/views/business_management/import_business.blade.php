@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Business Management')

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Upload Business</h2>
                <ul class="header-dropdown dropdown">

                    
                    <a  href="{{ asset('assets/sample_CSV/SampleCsv.xlsx') }}" class="btn btn-warning btn-flat" download>Sample CSV</a>
                    <a href="{{Route('business.add')}}" class="btn btn-primary">Add Business</a>
                </ul>
            </div>
            <div class="body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @php
                        $categories = DB::table('category')->get();
                    @endphp
                 {{-- {{  dd($categorys) }} ->unique('parent_id') --}}
                    {{-- <div class="form-group">
                        <label for="title">Category</label>
                        <select name="category[]" class="form-control" id="parent_category" required>
                            <option value="">--- Select Category ---</option>
                            @foreach ($categories  as $category)
                                    <option value="{{ $category->id ?? '' }}">{{ $category->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="body">
                                    <label for="title">Category</label>
                                    <select id="optgroup" class="category[]" multiple="multiple" required>
                                        <option value="">--- Select Category ---</option>
                                        @foreach ($categories  as $category)
                                                <option value="{{ $category->id ?? '' }}">{{ $category->name ?? '' }}</option>
                                        @endforeach
                                    </select>

                                    <div class="row my-4">
                                        <div class="fancy-checkbox col-md-6" style="display: flex;align-items: flex-end;">
                                            <label><input type="checkbox"  id="chkPassport" onclick="myFunction()" name="business_time"
                                                    value="1" style="width: 20px; height: 20px;"><span style="font-size: 15px;margin-left: 6px;color: black;">24/7</span></label>
                                        </div>
                                    </div>

                                    @php
                    $countries = DB::table('country')->get();
                @endphp
             {{-- {{  dd($categorys) }} ->unique('parent_id') --}}
                <div class="form-group my-2">
                    <label for="title">Country</label>
                    <select name="country" class="form-control" id="parent_category" required>
                        <option value="">--- Select Country ---</option>
                        @foreach ($countries  as $country)
                            {{-- @if($category->id == NULL) --}}
                                <option value="{{ $country->id ?? '' }}">{{ $country->name ?? '' }}</option>
                            {{-- @endif --}}
                        @endforeach
                    </select>
                </div>
                    <div class="form-group my-2">
                        <label>Upload Business</label>
                        <input type="file" name="file" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" style="padding-bottom: 33px;" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Business</button>
                    <a href="{{route('business.upcoming')}}" class="btn btn-danger">Back</a>
                </form>
                                </div>
                            </div>
                        </div>
                    </div>
               
                     {{-- @php
                    $countries = DB::table('country')->get();
                @endphp --}}
             
                {{-- <div class="form-group">
                    <label for="title">Country</label>
                    <select name="country" class="form-control" id="parent_category" required>
                        <option value="">--- Select Country ---</option>
                        @foreach ($countries  as $country)
                                <option value="{{ $country->id ?? '' }}">{{ $country->name ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label>Upload Business</label>
                        <input type="file" name="file" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" style="padding-bottom: 33px;" required>
                    </div> --}}

                    {{-- <button type="submit" class="btn btn-primary">Upload Business</button>
                    <a href="{{route('business.upcoming')}}" class="btn btn-danger">Back</a>
                </form> --}}
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


{{-- sfs --}}
@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script><!-- Bootstrap Colorpicker Js --> 
<script src="{{ asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script><!-- Input Mask Plugin Js --> 
<script src="{{ asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script><!-- Multi Select Plugin Js -->
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script><!-- Bootstrap Tags Input Plugin Js --> 
<script src="{{ asset('assets/vendor/nouislider/nouislider.js') }}"></script><!-- noUISlider Plugin Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
@stop

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

