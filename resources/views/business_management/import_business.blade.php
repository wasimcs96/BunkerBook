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
                    </div>                 --}}
                    <div class="col-md-12 my-3">
                        <label>Select Category</label>
                        <div class="multiselect_div">
                            <select id="multiselect1" name="category[]" value="" class="selectpicker" multiple
                                data-live-search="true">
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="fancy-checkbox col-md-6" style="display: flex;align-items: flex-end;">
                            <label><input type="checkbox"  id="chkPassport" onclick="myFunction()" name="business_time"
                                    value="1" style="width: 20px; height: 20px;"><span style="font-size: 15px;margin-left: 6px;color: black;">24/7</span></label>
                        </div>
                    </div>
               
                     @php
                    $countries = DB::table('country')->get();
                @endphp
             
                <div class="form-group">
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
                    </div>

                    <button type="submit" class="btn btn-primary">Upload Business</button>
                    <a href="{{route('business.upcoming')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>

</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-steps/jquery.steps.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<!-- Input Mask Plugin Js -->
<script src="{{ asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
{{-- <script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
<!-- Multi Select Plugin Js --> --}}
{{-- <script src="{{ asset('js/admin/jquery.min.js') }}"></script> --}}
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('assets/vendor/nouislider/nouislider.js') }}"></script><!-- noUISlider Plugin Js -->
<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" type="text/javascript"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=y8edi4divxwsplcdd28rzuyx245zbzdndm22yzhuaanemki5">
</script>
{{-- <script src="https://www.matrixmaritimemedia.com/bunkerbook/assets/js/jquery.geocomplete.min.js"></script> --}}


<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>

<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

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

