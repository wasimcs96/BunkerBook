@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Add New Business')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body wizard_validation">
                <form id="wizard_with_validation"  action="{{route('business.store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <h3>Basic Details</h3>
                    <fieldset>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label>Select Plan</label>
                                    <select class="form-select" name="plan" aria-label="Default select example"
                                        style="width: -webkit-fill-available;border: solid 1px #ccc;padding: .375rem .75rem;"
                                        required>
                                        <option value="">-- Select Type --</option>
                                        <option value="0">Standard</option>
                                        <option value="1">Premium</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 my-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Name *" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="custm">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email[]" placeholder="Email *" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_button2 btn btn-warning btn-sm"
                                        title="Add field">Add More fields</a>
                                </div>
                            </div>




                            <div class="col-md-12 my-3">
                                <label>Select Category</label>
                                <div class="multiselect_div">
                                    <?php $category= App\Models\Category::all(); ?>
                                    <select id="multiselect1" name="category[]" class="selectpicker" multiple
                                        data-live-search="true">
                                        @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="field_wrapper1">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Website</label>
                                        <input type="text" name="website[]" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_button1 btn btn-warning btn-sm"
                                        title="Add field">Add More fields</a>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="number" name="mobile" placeholder="Mobile" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div> -->
                            <div class="field_wrapper">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Landline</label>
                                        <input type="number" id="phoneNumber" maxlength="16" name="landline[]" value="" placeholder="1234567890" class="form-control">
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_button btn btn-warning btn-sm"
                                        title="Add field">Add More fields</a>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <input type="text" name="address" id="address" value=""
                                        class="form-control geocomplete pac-target-input" placeholder="Enter a location"
                                        autocomplete="off">
                                    <input type="hidden" id="lat" name="lat" value="">
                                    <input type="hidden" id="long" name="lng" value="">

                                    <span class="msg_alert_class" id="addressMsg"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                <label class="control-label">Country</label>
                                    <select name="country" id="country" class="srs-in rounded"
                                        style="width: -webkit-fill-available;border: solid 1px #ccc;padding: .375rem .75rem;"
                                        placeholder="Search Any Country .....">
                                        <?php $country=App\Models\Country::all(); ?>
                                        @foreach($country as $count)
                                        <option value="{{ $count->id ?? '' }}">{{ $count->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">24/7</label>
                                   <input type="checkbox" name="business_time" id="business_time" value="" class="form-control">
                                   <span class="msg_alert_class" id="start_timeMsg"></span>
                                </div>
                             </div> --}}
                          
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Bussiness Profile</label>
                                    <input type="file" name="business_profile" accept="image/*" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Featured Banner Image</label>
                                    <input type="file" name="featured_banner_image" accept="image/*"
                                        class="form-control">
                                </div>
                            </div>

                        </div>
                    </fieldset>

                    <h3>Overview Detail</h3>
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">About Us</label>

                                <textarea name="about" maxlength="150" minlength="140" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Ports of Operation</label>

                                <textarea name="ports_of_operation" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="fancy-checkbox col-md-6" style="display: flex;align-items: flex-end;">
                                <label><input type="checkbox"  id="chkPassport" onclick="myFunction()" name="business_time"
                                        value="1" style="width: 20px; height: 20px;"><span style="font-size: 15px;margin-left: 6px;color: black;">24/7</span></label>
                            </div>
                        </div>
                        <div id="uniname">
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Operating Hours Start</label>
                                    <input type="time" name="start_time" id="start_time" value="" class="form-control">
                                    <span class="msg_alert_class" id="start_timeMsg"></span>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Operating Hours End</label>
                                    <input type="time" name="end_time" id="end_time" value="" class="form-control">
                                    <span class="msg_alert_class" id="end_timeMsg"></span>
                                </div>
                            </div>
                        <div>
                      

                              
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Office Hours</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Sunday</label>
                    <select name="sunday" id="sunday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
           {{-- <div class="row"> --}}
            <div class="row" id="sundayDiv">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="sunday_start_time" id="sunday_start_time" value=""class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="sunday_end_time" id="sunday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
           {{-- </div> --}}
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Monday</label>
                    <select name="monday" id="monday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="mondayDiv">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time"name="monday_start_time"id="monday_start_time" value=""class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="monday_end_time" id="monday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Tuesday</label>
                    <select name="tuesday" id="tuesday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="tuesdayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="tuesday_start_time" id="tuesday_start_time"value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="tuesday_end_time" id="tuesday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Wednesday</label>
                    <select name="wednesday" id="wednesday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="wednesdayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time"name="wednesday_start_time"id="wednesday_start_time"value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="wednesday_end_time" id="wednesday_end_time"value="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Thursday</label>
                    <select name="thursday" id="thursday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="thursdayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="thursday_start_time" id="thursday_start_time"value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="thursday_end_time" id="thursday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Friday</label>
                    <select name="friday" id="friday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="fridayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="friday_start_time" id="friday_start_time" value=""class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="friday_end_time" id="friday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Saturday</label>
                    <select name="Saturday" id="saturday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="saturdayDiv" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="Saturday_start_time" id="Saturday_start_time" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="Saturday_end_time" id="Saturday_end_time" value=""class="form-control">
                    </div>
                    </div>
                </div>
                        </div>

                    </fieldset>

                    <h3>Personal Detail</h3>

                    <fieldset>
                        <div class="field_wrapper_ my-3">
                            <div class="col-md-12">
                                <div class="field_wrapper_staff">
                                    <div class="form-group">
                                        <label class="control-label">Staff Detail</label>
                                         <label>Name</label>
                                        <input type="text" name="staff[0][staff_name]" value="" placeholder="Name"
                                            class="form-control my-3">
                                             <label>Job Title</label>
                                        <input type="text" name="staff[0][staff_job_title]" value=""
                                            placeholder="Job title" class="form-control my-3">
                                             <label>Email</label>
                                        <input type="text" name="staff[0][staff_email]" value="" placeholder="Email"
                                            class="form-control my-3">
                                             <label>Mobile</label>
                                        <input type="mobile" name="staff[0][staff_mobile]" value="" placeholder="Mobile"
                                            class="form-control my-3">
                                            <label>Skype Id</label>
                                        <input type="text" name="staff[0][staff_skype]" value="" placeholder="Skype Id"
                                            class="form-control my-3">
                                             <label>About</label>
                                        <textarea name="staff[0][staff_about]" placeholder="About"
                                            class="form-control my-3"></textarea>
                                             <label>Profile</label>
                                        <input type="file" name="staff[0][staff_profile]" value="" placeholder="Profile"
                                            accept="image/*" class="form-control my-3">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_staff_button btn btn-warning btn-sm"
                                        title="Add field">Add More Staff</a>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Photos</h3>
                    <fieldset>
                        <div class="form-group">
                            <label class=" form-control-label">Photos </label><br>

                            <div class="upload-btn-wrapper">

                                <!-- <button type="button" class="btn_upload" id="upBtn">Upload a file</button> -->

                                <input type="file" name="business_photos[]" id="photos" class="form-control imageUpload"
                                    multiple>

                            </div>
                            <!-- <input name="" id="photo" type="file" class="dropify-frrr" > -->

                            <div id="preview" class="col-md-12">


                            </div>



                        </div>
                    </fieldset>

                    <h3>Videos</h3>
                    <fieldset>

                        <div class="field_wrapperyoutube_link">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Youtube Link</label>
                                    <input type="text" name="youtube_video[]" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="javascript:void(0);" class="add_buttonyoutube_link btn btn-warning btn-sm"
                                    title="Add field">Add More fields</a>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div>
<!--<div id="pageloader">-->
<!--   <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />-->
<!--</div>-->
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
 <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
<style>
#form-overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
</style>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script type="text/javascript">


$(document).ready(function() {
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Landline</label><input type="number" name="landline[]" value="" placeholder="1234567890"  class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm remove_button float-right" id="' +
                x + '"><i class="fa fa-times"></i></a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });


    var add_staff_button = $('.add_staff_button');
    var wrapper_staff = $('.field_wrapper_staff');
    var y = 1;
    var inc = 1;
    $(add_staff_button).click(function() {
        //Check maximum number of input fields
        if (y < maxField) {
            y++; //Increment field counter

            var fieldHTML_staff = ' <div class="rowField_staff' + y +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Staff Detail <a href="javascript:void(0);" style="margin-top: 0px;" class="btn btn-danger btn-sm remove_button_staff" id="' +
                y + '">X</a> </label> <input type="text" name="staff[' + inc +
                '][staff_name]"  value="" placeholder="Name" class="my-3 form-control"> <label>Job Title</label><input type="text" name="staff[' +
                inc +
                '][staff_job_title]"  value="" placeholder="Job title" class="my-3 form-control">                                         <label>Email</label><input type="text" name="staff[' +
                inc +
                '][staff_email]"  value="" placeholder="Email" class="my-3 form-control"> <label>Mobile</label><input type="number" name="staff[' +
                inc +
                '][staff_mobile]"  value="" placeholder="Mobile" class="my-3 form-control"><label>Skype Id</label><input type="text" name="staff[' +
                inc +
                '][staff_skype]"  value="" placeholder="Skype Id" class="my-3 form-control"> <label>About</label><textarea name="staff[' +
                inc +
                '][staff_about]"   placeholder="About" class="my-3 form-control" ></textarea> <label>Profile</label><input type="file" name="staff[' +
                inc +
                '][staff_profile]"   value="" placeholder="Profile" accept="image/*" class="my-3 form-control"> </div></div></div>'; //New input field html

            $(wrapper_staff).append(fieldHTML_staff); //Add field html
            inc++;
        }
    });

    //Once remove button is clicked
    $(wrapper_staff).on('click', '.remove_button_staff', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField_staff' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });

});





jQuery(function() {

    jQuery(document).on("change", "#videos", function()

        {
            var total_file_video = document.getElementById("videos").files.length;

            var divvideo = jQuery("#videopreview video").length;



            for (var j = 0; j < total_file_video; j++) {

                m = divvideo + 1;

                $('#videopreview').append('<div class="img_div col-md-3" id="cancelvideo' + m +
                    '"><span style="cursor:pointer;background: red;color: white;border-radius: 10px;padding: 5px;" class="cancel_cls" onclick="removeVideo(' +
                    m + ')">X</span><video controls width="200"><source src=' + URL.createObjectURL(
                        event.target.files[j]) +
                    ' type="video/mp4"></video><br><input type="file" name="video_orignal[]" class="form-control imageUpload" id="video_orignal' +
                    m + '" accept="video/*" style="display:none;"></div>');

                document.querySelector("#video_orignal" + m).files = document.querySelector("#videos")
                    .files;

            }

            jQuery('#upvideoBtn').html('Add New');

        });

});



function removeVideo(i) {

    var divvideo = jQuery("#videopreview video").length;



    if (divvideo <= 1) {

        jQuery('#upvideoBtn').html('Upload a file');

    }

    jQuery('#cancelvideo' + i).remove();



}
</script>

<script>
function step_2_next() {

    $('#nameMsg').html('');
    var name = $('#name_new').val();
    if (name == '') {
        $('#nameMsg').html('Please enter name.');
        $("#name_new").focus();
        return false;
    }

    $('#addressMsg').html('');
    var address = $('#address').val();
    if (address == '') {
        $('#addressMsg').html('Please enter address.');
        $("#address").focus();
        return false;
    }
    $('#countryMsg').html('');
    var country = $('#country').val();
    if (country == '') {
        $('#countryMsg').html('Please enter country.');
        $("#country").focus();
        return false;
    }




    return false;

}

jQuery(function() {

    jQuery(document).on("change", "#sunday", function() {
        var sunday = $('#sunday').val();

        if (sunday == 'close') {
            $('#sundayDiv').css('display', 'none');


        } else {
            $('#sundayDiv').css('display', 'block');
           
        }
    });

    jQuery(document).on("change", "#monday", function() {
        var monday = $('#monday').val();

        if (monday == 'close') {
            $('#mondayDiv').css('display', 'none');


        } else {
            $('#mondayDiv').css('display', 'block');

        }
    });

    jQuery(document).on("change", "#tuesday", function() {
        var tuesday = $('#tuesday').val();

        if (tuesday == 'close') {
            $('#tuesdayDiv').css('display', 'none');


        } else {
            $('#tuesdayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#wednesday", function() {
        var wednesday = $('#wednesday').val();

        if (wednesday == 'close') {
            $('#wednesdayDiv').css('display', 'none');


        } else {
            $('#wednesdayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#thursday", function() {
        var thursday = $('#thursday').val();

        if (thursday == 'close') {
            $('#thursdayDiv').css('display', 'none');


        } else {
            $('#thursdayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#friday", function() {
        var friday = $('#friday').val();

        if (friday == 'close') {
            $('#fridayDiv').css('display', 'none');


        } else {
            $('#fridayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#saturday", function() {
        var saturday = $('#saturday').val();

        if (saturday == 'close') {
            $('#saturdayDiv').css('display', 'none');


        } else {
            $('#saturdayDiv').css('display', 'block');

        }
    });

});
</script>



<script>


$(document).ready(function() {
    var maxField = 2; //Input fields increment limitation
    var addButton = $('.add_button1'); //Add button selector
    var wrapper = $('.field_wrapper1'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField1' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Website</label><input type="text" name="website[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm float-right remove_button1" id="' +
                x + '"><i class="fa fa-times"></i></a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button1', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField1' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });




});
$(document).ready(function() {
    var maxField = 4; //Input fields increment limitation
    var addButton = $('.add_button2'); //Add button selector
    var wrapper = $('.custm'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField2' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Email</label><input type="email" name="email[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm float-right remove_button2" id="' +
                x + '"><i class="fa fa-times"></i></a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button2', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField2' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });




});


$(document).ready(function() {
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_buttonyoutube_link'); //Add button selector
    var wrapper = $('.field_wrapperyoutube_link'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clickedhttps://www.youtube.com/watch?v=ZIsdbVOQJNc
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField1' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Youtube Link</label><input type="text" name="youtube_video[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm float-right remove_buttonyoutube_link" id="' +
                x + '"><i class="fa fa-times"></i></a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button1', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField1' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });




});
</script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>

<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>


<script>
$('.dropify-frrr').dropify({
    messages: {
        default: 'Upload Image',
        replace: 'Upload  Image',
        remove: 'Cancel',
        error: 'Sorry,the file is too large'
    }
});
</script>


{{-- <script type="text/javascript">
    $(function () {
        $("#chkPassport").click(function () {
            console.log('sdsdsd');
            if ($(this).is("checked")) {
                $("#uniname").show();
            } else {
                $("#uniname").style('display:none');
            }
        });
    });

    
</script> --}}
<script>
    function myFunction() {
// Get the checkbox
var checkBox = document.getElementById("chkPassport");
// Get the output text
var text = document.getElementById("uniname");

// If the checkbox is checked, display the output text
if (checkBox.checked == true){
text.style.display = "none";
} else {
text.style.display = "block";
}
}
</script>
<!--<script src"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>-->
<script>
$(document).ready(function(){
    
  $("#wizard_with_validation").on("submit", function(){
      console.log('formsubmited');
     document.getElementById("form-overlay").style.display = "block";
     
  });//submit
});//document ready
</script>

<script src="{{ asset('build/js/intlTelInput.js')}}"></script>
  <script>
  const isNumericInput = (event) => {
    const key = event.keyCode;
    return ((key >= 48 && key <= 57) || // Allow number line
        (key >= 96 && key <= 105) // Allow number pad
    );
};

const isModifierKey = (event) => {
    const key = event.keyCode;
    return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
        (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
        (key > 36 && key < 41) || // Allow left, up, right, down
        (
            // Allow Ctrl/Command + A,C,V,X,Z
            (event.ctrlKey === true || event.metaKey === true) &&
            (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
        )
};

const enforceFormat = (event) => {
    // Input must be of a valid number format or a modifier key, and not longer than ten digits
    if(!isNumericInput(event) && !isModifierKey(event)){
        event.preventDefault();
    }
};

const formatToPhone = (event) => {
    if(isModifierKey(event)) {return;}

    const input = event.target.value.replace(/\D/g,'').substring(0,10); // First ten digits of input only
    const areaCode = input.substring(0,3);
    const middle = input.substring(3,6);
    const last = input.substring(6,10);

    if(input.length > 6){event.target.value = `(${areaCode}) ${middle} - ${last}`;}
    else if(input.length > 3){event.target.value = `(${areaCode}) ${middle}`;}
    else if(input.length > 0){event.target.value = `(${areaCode}`;}
};

const inputElement = document.getElementById('phoneNumber');
inputElement.addEventListener('keydown',enforceFormat);
inputElement.addEventListener('keyup',formatToPhone);
  </script>
<script>
setTimeout(function(){ 
    
   var x = document.querySelector(".actions").lastChild.lastChild.remove();

}, 3000);

</script>
@stop