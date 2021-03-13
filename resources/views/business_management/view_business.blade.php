@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Business Details')

@section('content')
<div class="row clearfix">
        <div id="page-wrapper" style="min-height: 348px;">
            <div class="container-fluid">
                <div class="card">
                    <!-- /.row -->
                    <div class="row">

                        <div class="white-box">
                            <h4>Basic Detail</h4>
                            <p style="text-align: unset">
                            @if(isset($view->business_profile)&& file_exists($view->business_profile)) <img style="height: 150px;width: 150px;" src="{{asset($view->business_profile)}}">@else <img style="height: 150px;width: 150px;" src="{{asset('frontEnd/assets/img/about/ab-2-pic.jpg')}}">@endif</p>
                           <div class="row p-4">
                               {{-- {{dd($view)}} --}}
                            <p class="col-md-6"><b>Plan:</b>@if(isset($view->plan_type)) @if($view->plan_type == 0)Standard @else Premium @endif @endif</p>
                           <p class="col-md-6"><b>Name:</b> {{$view->name ?? ''}}</p>
                            <p class="col-md-6"><b>Email:</b>{{$view->email ?? ''}}</p>
                            <p class="col-md-6"><b>Mobile:</b> {{$view->mobile ?? ''}}</p>
                            <p class="col-md-6"><b>Landline:</b>  {{$view->landline ?? ''}}</p>
                            <p class="col-md-6"><b>Address:</b> {{$view->address ?? ''}}</p>
                            <p class="col-md-6"><b>Start Time:</b>  {{$view->start_time ?? ''}}</p>
                            <p class="col-md-6"><b>End Time:</b>  {{$view->end_time ?? ''}}</p>
                           </div>
                            <hr>
                            <h4>Overview</h4>
                           <div class="row p-4">
                           <p class="col-md-6"><b>about:</b> {{$view->about ?? ''}}</p>
                            <p class="col-md-6"><b>Ports of operation:</b> {{$view->ports_of_operation ?? ''}}.</p>
                           </div>
                            <h5>Office Hours</h5>
                            <div class="row p-4">
                            <p class="col-md-6"><b>Sunday:</b> {{$view->sunday_start_time ?? ''}} -  {{$view->sunday_end_time ?? ''}}</p>
                            <p class="col-md-6"><b>Monday:</b> {{$view->monday_start_time}} - {{$view->monday_start_time}}</p>
                            <p class="col-md-6"><b>Tuesday:</b>  {{$view->tuesday_start_time}} - {{$view->tuesday_start_time}}</p>
                            <p class="col-md-6"><b>Wednesday:</b> {{$view->wednesday_start_time}} - {{$view->wednesday_start_time}}</p>
                            <p class="col-md-6"><b>Thursday:</b> {{$view->thursday_start_time}} - {{$view->thrusday_start_time}}</p>
                            <p class="col-md-6"><b>Friday:</b> {{$view->friday_start_time}} - {{$view->friday_start_time}}</p>
                            <p class="col-md-6"><b>Saturday:</b> {{$view->saturday_start_time}} - {{$view->saturday_start_time}}</p>
                            </div>
                            <hr>
                            <h4>Personal Detail</h4>
                            <div class="row p-4">
                            <p class="col-md-6"><b>name:</b>{{$view->userBusiness->first_name ?? ''}} {{$view->userBusiness->last_name ?? ''}}</p>
                            <p class="col-md-6"><b>Job Title: {{$view->userBusiness->job_title ?? ''}}</b> </p>
                            <p class="col-md-6"><b>Email:</b> {{$view->userBusiness->email ?? ''}}</p>
                            <p class="col-md-6"><b>Mobile:</b> {{$view->userBusiness->mobile ?? ''}}</p>
                            </div>
                            {{-- <p><b>Skype Id:</b> {{$view->userBusiness->skype_id ?? ''}}</p> --}}
                            {{-- <p><b>About:</b> </p> --}}
                            <hr>
                            <!-- <hr> -->

                            <h4>All Photos</h4>
                            <?php $images=$view->businessImage; ?>
                           <div class="row">
                           @foreach($images as $image)
                            <img src="{{asset($image->image ?? '')}}" class="m-2" style="width: 25vw;">
                            @endforeach
                           </div>
                            <hr>

                            <h4>All Videos</h4>
                            <?php $videos=$view->businessVideo; ?>
                            @foreach($videos as $video)
                            <!-- <img src="{{asset($video->video ?? '')}}"> -->
                            <a class="btn btn-sm btn-info" href="{{asset($video->video ?? '')}}">Watch</a>
                            <!-- <button type="link" class="btn btn-lg btn-primary">{{asset($video->video ?? '')}}</button> -->
                            @endforeach


                        </div>
                    </div>
                    <!--row -->
                </div>

            </div>


            <footer class="footer text-center">© Copyright 2021 The Bunker Book. All Rights Reserved. </footer>
        </div>
</div>

@stop


@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-steps/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<!-- Input Mask Plugin Js -->
<script src="{{ asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
<!-- Multi Select Plugin Js -->
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
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
<script src="https://www.matrixmaritimemedia.com/bunkerbook/assets/js/jquery.geocomplete.min.js"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
@stop
