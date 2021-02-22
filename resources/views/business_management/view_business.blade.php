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
                            <p><img style="height: 150px;width: 150px;"
                                    src="https://www.matrixmaritimemedia.com/bunkerbook/assets/img/no-image.png"></p>
                            <p><b>Name:</b> {{$view->name}}</p>
                            <p><b>Email:</b> info@pavilionenergy.com</p>
                            <p><b>Mobile:</b> </p>
                            <p><b>Landline:</b> +65 6228 8100</p>
                            <p><b>Address:</b> 12 Marina Boulevard #37-02 Marina Bay Financial Centre Tower 3 Singapore 018982.</p>
                            <p><b>Start Time:</b> </p>
                            <p><b>End Time:</b> </p>
                            <hr>
                            <h4>Overview</h4>
                            <p><b>about:</b> In January 2016, our wholly-owned subsidiary, Pavilion Energy Singapore, was appointed
                                by the Maritime and Port Authority of Singapore (MPA) as an LNG bunker supplier to vessels in the
                                Port of Singapore. Supported by our licence to import LNG for Singapore, Pavilion Energy Singapore
                                works across the complete value chain to provide bunkering solutions to our customers. Combined with
                                the demand of our on-shore customers in Singapore, Pavilion is able to leverage economies of scale
                                to provide competitive logistics solutions for LNG bunkering.

                                Pavilion Energy continues to work on LNG bunker supply and delivery models in partnership with
                                international players for the provision of LNG bunker to vessels in the Port of Singapore.

                                Note: As of 1 October 2019, Pavilion Gas has been renamed to Pavilion Energy Singapore.</p>
                            <p><b>Ports of operation:</b> Operating all ports in Singapore, Spain and the UK.</p>
                            <h5>Office Hours</h5>
                            <p><b>Sunday:</b> -</p>

                            <p><b>Monday:</b> -</p>

                            <p><b>Tuesday:</b> -</p>

                            <p><b>Wednesday:</b> -</p>

                            <p><b>Thursday:</b> -</p>

                            <p><b>Friday:</b> -</p>

                            <p><b>Saturday:</b> -</p>
                            <hr>
                            <h4>Personal Detail</h4>
                            <p><b>name:</b> </p>
                            <p><b>Job Title:</b> </p>
                            <p><b>Email:</b> </p>
                            <p><b>Mobile:</b> </p>
                            <p><b>Skype Id:</b> </p>
                            <p><b>About:</b> </p>
                            <hr>
                            <hr>

                            <h4>All Photos</h4>
                            <hr>

                            <h4>All Videos</h4>



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
