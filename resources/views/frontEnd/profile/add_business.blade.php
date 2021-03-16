@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
@include('frontEnd.layout.headerindex')

@section('content')

<form id="regForm" action="{{ route('front.business.add.create') }}" method="POST">
    @csrf
    <h3>Basic Details</h3>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name"  placeholder="Name *" class="form-control"
                    required>
            </div>
        </div>
        <div class="custm">
        <div class="col-md-12">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email[]"  placeholder="Email *"
                    class="form-control" required>
            </div>
        </div>
    </div>

        <div class="col-md-12">
            <div class="form-group">
                <a href="javascript:void(0);" class="add_button2 btn btn-warning btn-large" title="Add field">Add More
                    fields</a>
            </div>
        </div>
    
        <div class="col-md-12">
            <label>Select Category</label>
            <div class="multiselect_div">
                <?php $category= App\Models\Category::all(); ?>
                <select id="multiselect1" name="category[]"  class="selectpicker" multiple
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
                    <input type="text"  name="website[]" value="" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <a href="javascript:void(0);" class="add_button1 btn btn-warning btn-large" title="Add field">Add More
                    fields</a>
            </div>
        </div>
        <div class="field_wrapper">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Landline</label>
                    <input type="text" name="landline[]"  value="" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <a href="javascript:void(0);" class="add_button btn btn-warning btn-large" title="Add field">Add More
                    fields</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Address</label>
                <input type="text" name="address" id="address" value="" oninput="this.className = ''"
                    class="form-control geocomplete pac-target-input" placeholder="Enter a location" autocomplete="off">
                <span class="msg_alert_class" id="addressMsg"></span>
            </div>
        </div>
        <!-- <div class="row">                    -->
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label class="control-label">Country</label>
                <select name="country" id="country" class="rounded srs-in"
                    style="width: -webkit-fill-available;border: solid 1px #ccc;padding: .375rem .75rem;"
                    placeholder="Search Any Country .....">
                    <?php $country=App\Models\Country::all(); ?>
                    @foreach($country as $count)
                    <option value="{{ $count->id ?? '' }}">{{ $count->name ?? ''}}</option>
                    @endforeach
                </select>
            </div>
           
        </div>
        <!-- </div> -->
        <!-- <div class="row"> -->
        <!-- <div class="fancy-checkbox col-md-1" style="margin: auto;">
            <label><input type="checkbox"  name="business_time" value="1"><span>24/7</span></label>
        </div> -->
   
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Bussiness Profile</label>
                <input type="file" name="business_profile"  accept="image/*"
                    class="form-control" style="
    padding-bottom: 33.75;
">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Featured Banner Image</label>
                <input type="file" name="featured_banner_image"  accept="image/*"
                    class="form-control" style="
    padding-bottom: 33.75;
">
            </div>
        </div>

        <!-- <p><input placeholder="Last name..."  name="lname"></p>
    <p><input placeholder="Last name..."  name="lname"></p>
    <p><input placeholder="Last name..."  name="lname"></p>
    <p><input placeholder="Last name..."  name="lname"></p> -->
    </div>
    <div class="tab">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">About Us</label>
                <textarea name="about" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Ports of Operation</label>
                <textarea name="ports_of_operation" rows="3" col="5" class="form-control"></textarea>
            </div>
        </div>
            <div class="fancy-checkbox col-md-6" style="display: flex;align-items: flex-end;">
                <label><input type="checkbox"  id="chkPassport" onclick="myFunction()" name="business_time"
                        value="1" style="width: 20px; height: 20px;"></label>
                        <span style="font-size: 15px;margin-left: 6px;color: black;">24/7</span>
            </div>
        <div id="uniname">
        <div class="row" >
            <div class="col-md-6" style="padding-left: 30px;">
                <div class="form-group">
                    <label class="control-label">Operating Hours Start</label>
                    <input type="time" name="start_time"  id="start_time" value=""
                        class="form-control">
                    <span class="msg_alert_class" id="start_timeMsg"></span>
                </div>
            </div>

            <div class="col-md-6" style="padding-right: 30px;">
                <div class="form-group">
                    <label class="control-label">Operating Hours End</label>
                    <input type="time" name="end_time"  id="end_time" value=""
                        class="form-control">
                    <span class="msg_alert_class" id="end_timeMsg"></span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Office Hours</label>
            </div>
        </div>
        <!--sunday-->
        <div class="col-md-12">
            <div class="col-md-12" style="padding: 0;">
                <div class="form-group">
                    <label class="control-label">Sunday</label>
                    <select name="sunday"  id="sunday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="sundayDiv">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="sunday_start_time" id="sunday_start_time"
                            value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="sunday_end_time" id="sunday_end_time"
                            value="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <!--monday-->
        <div class="col-md-12">
            <div class="col-md-12" style="padding: 0;">
                <div class="form-group">
                    <label class="control-label">Monday</label>
                    <select  name="monday" id="monday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>

                    </select>

                </div>

            </div>
            <div class="row" id="mondayDiv">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="monday_start_time" id="monday_start_time"
                            value="" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="monday_end_time" id="monday_end_time"
                            value="" class="form-control">

                    </div>
                </div>


            </div>

        </div>
        <!--tuesday-->
        <div class="col-md-12">
            <div class="col-md-12" style="padding: 0;">
                <div class="form-group">
                    <label class="control-label">Tuesday</label>
                    <select  name="tuesday" id="tuesday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>

                    </select>

                </div>

            </div>
            <div class="row" id="tuesdayDiv">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="tuesday_start_time"
                            id="tuesday_start_time" value="" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="tuesday_end_time" id="tuesday_end_time"
                            value="" class="form-control">

                    </div>
                </div>


            </div>

        </div>
        <!--wednesday-->
        <div class="col-md-12">
            <div class="col-md-12" style="padding: 0;">
                <div class="form-group">
                    <label class="control-label">Wednesday</label>
                    <select  name="wednesday" id="wednesday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>

                    </select>

                </div>

            </div>
            <div class="row" id="wednesdayDiv">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="wednesday_start_time"
                            id="wednesday_start_time" value="" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="wednesday_end_time"
                            id="wednesday_end_time" value="" class="form-control">

                    </div>
                </div>


            </div>

        </div>
        <!--thursday-->
        <div class="col-md-12">
            <div class="col-md-12" style="padding: 0;">
                <div class="form-group">
                    <label class="control-label">Thursday</label>
                    <select  name="thursday" id="thursday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>

                    </select>

                </div>

            </div>
            <div class="row" id="thursdayDiv">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="thursday_start_time"
                            id="thursday_start_time" value="" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="thursday_end_time" id="thursday_end_time"
                            value="" class="form-control">

                    </div>
                </div>


            </div>

        </div>
        <!--Friday-->
        <div class="col-md-12">
            <div class="col-md-12" style="
    padding: 0;
">
                <div class="form-group">
                    <label class="control-label">Friday</label>
                    <select  name="friday" id="friday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>

                    </select>

                </div>

            </div>
            <div class="row" id="fridayDiv">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="friday_start_time" id="friday_start_time"
                            value="" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="friday_end_time" id="friday_end_time"
                            value="" class="form-control">

                    </div>
                </div>


            </div>

        </div>
        <!--saturday-->
        <div class="col-md-12">
            <div class="col-md-12" style="
    padding: 0;
">
                <div class="form-group">
                    <label class="control-label">Saturday</label>
                    <select  name="Saturday" id="Saturday" class="form-control">
                        <option  value="open">Open</option>
                        <option  value="close">Close</option>

                    </select>

                </div>

            </div>
            <div class="row" id="sundayDiv">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input  type="time" name="Saturday_start_time"
                            id="Saturday_start_time" value="" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input  type="time" name="Saturday_end_time" id="sunday_end_time"
                            value="" class="form-control">

                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <div class="tab">
        <div class="field_wrapper_staff">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Staff Detail</label>
                    <input  type="text" name="staff[0][staff_name]" value=""
                        placeholder="Name" class="form-control my-3">
                    <input  type="text" name="staff[0][staff_job_title]" value=""
                        placeholder="Job title" class="form-control my-3">
                    <input  type="text" name="staff[0][staff_email]" value=""
                        placeholder="Email" class="form-control my-3">
                    <input  type="text" name="staff[0][staff_mobile]" value=""
                        placeholder="Mobile" class="form-control my-3">
                    <input  type="text" name="staff[0][staff_skype]" value=""
                        placeholder="Skype Id" class="form-control my-3">
                    <textarea name="staff[0][staff_about]" placeholder="About" class="form-control my-3"></textarea>
                    <input  type="file" name="staff[0][staff_profile]" value=""
                        placeholder="Profile" accept="image/*" class="form-control my-3" style="padding-bottom: 34.75;">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <a href="javascript:void(0);" class="add_staff_button btn btn-warning btn-large" title="Add field">Add
                        More Staff</a>
                </div>
            </div>
        </div>
        <!-- <p><input placeholder="dd"  name="dd"></p>
    <p><input placeholder="mm"  name="nn"></p>
    <p><input placeholder="yyyy"  name="yyyy"></p> -->
    </div>
    <div class="tab">
        <div class="form-group">
            <label class=" form-control-label">Photos </label><br>

            <div class="upload-btn-wrapper">

                <!-- <button type="button" class="btn_upload" id="upBtn">Upload a file</button> -->

                <input  type="file" name="business_photos[]" id="photos"
                    class="form-control imageUpload" style="padding-bottom: 33.75;" multiple>

            </div>
            <!-- <input name="" id="photo" type="file" class="dropify-frrr" > -->

            <div id="preview" class="col-md-12">


            </div>



        </div>
        <!-- <p><input placeholder="Username..."  name="uname"></p>
    <p><input placeholder="Password..."  name="pword" type="password"></p> -->
    </div>
    <div class="tab">
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
                <a href="javascript:void(0);" class="add_buttonyoutube_link btn btn-warning btn-large"
                    title="Add field">Add More fields</a>
            </div>
        </div>
        <!-- <p><input placeholder="Username..."  name="uname"></p>
    <p><input placeholder="Password..."  name="pword" type="password"></p> -->
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
    <button type="submit">Submit</button>
</form>
@endsection
@section('per_page_style')
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
}

#regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
}

h1 {
    text-align: center;
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
    background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
    display: none;
}

button {
    background-color: #FFA500;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
}

button:hover {
    opacity: 0.8;
}

#prevBtn {
    background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}

.step.active {
    opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
    background-color: #FFA500;
}
label{
    color: black!important;
}
</style>

@endsection
@section('per_page_script')


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").html = '<button class"btn btn-danger"></button>';
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
      
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}
</script>


<script type="text/javascript">
    $(document).ready(function() {
        var maxField = 2; //Input fields increment limitation
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
                    '" ><div class="col-md-9"><div class="form-group"><label class="control-label">Landline</label><input type="number" name="landline[]" value="" class="form-control"> </div></div><div class="col-md-3"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-large remove_button" id="' +
                    x + '">Delete</a></div></div></div>'; //New input field html
    
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
                    '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Staff Detail <a href="javascript:void(0);" style="margin-top: 0px;" class="btn btn-danger btn-large remove_button_staff" id="' +
                    y + '">X</a> </label> <input type="text" name="staff[' + inc +
                    '][staff_name]"  value="" placeholder="Name" class="my-3 form-control"><input type="text" name="staff[' +
                    inc +
                    '][staff_job_title]"  value="" placeholder="Job title" class="my-3 form-control"><input type="text" name="staff[' +
                    inc +
                    '][staff_email]"  value="" placeholder="Email" class="my-3 form-control"><input type="number" name="staff[' +
                    inc +
                    '][staff_mobile]"  value="" placeholder="Mobile" class="my-3 form-control"><input type="text" name="staff[' +
                    inc +
                    '][staff_skype]"  value="" placeholder="Skype Id" class="my-3 form-control"><textarea name="staff[' +
                    inc +
                    '][staff_about]"   placeholder="About" class="my-3 form-control" ></textarea><input type="file" name="staff[' +
                    inc +
                    '][staff_profile]" style="padding-bottom: 33.75;"  value="" placeholder="Profile" accept="image/*" class="my-3 form-control"> </div></div></div>'; //New input field html
    
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
    
        jQuery(document).on("change", "#photos", function()
    
            {
                var total_file = document.getElementById("photos").files.length;
    
                var divimage = jQuery("#preview img").length;
    
    
    
                for (var i = 0; i < total_file; i++) {
    
                    k = divimage + 1;
    
                    $('#preview').append('<div class="img_div col-md-3" id="cancel' + k +
                        '"><span style="cursor:pointer;background: red;color: white;border-radius: 10px;padding: 5px;" class="cancel_cls" onclick="removeImg(' +
                        k + ')">X</span><img style="width: 200px;height: 150px;"  src=' + URL
                        .createObjectURL(event.target.files[i]) +
                        '><br><input type="file" name="photos_orignal[]" class="form-control imageUpload" id="photos_orignal' +
                        k + '" accept="image/*" style="display:none;"></div>');
    
    
                    document.querySelector("#photos_orignal" + k).files = document.querySelector("#photos")
                        .files;
    
                }
    
                jQuery('#upBtn').html('Add New');
    
            });
    
    });
    
    
    
    function removeImg(i) {
    
        var divimage = jQuery("#preview img").length;
    
    
    
        if (divimage <= 1) {
    
            jQuery('#upBtn').html('Upload a file');
    
        }
    
        jQuery('#cancel' + i).remove();
    
    
    
    }
    
    
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
                //$("#sunday_start_time").attr(" ", false);
                //$("#sunday_end_time").attr(" ", false);
    
            } else {
                $('#sundayDiv').css('display', 'block');
                // $("#sunday_start_time").attr(" ", true);
                //$("#sunday_end_time").attr(" ", true);
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
    //     $(document).ready(function() {
    
    //        $(".chosen").chosen();
    //        $('.chosen-toggle').each(function(index) {
    //       console.log(index);
    //           $(this).on('click', function(){
    //           console.log($(this).parent().find('option').text());
    //                $(this).parent().find('option').prop('selected', $(this).hasClass('select')).parent().trigger('chosen:updated');
    //           });
    //   });
    //   });
    
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
                    '" ><div class="col-md-12"><div class="form-group"><label class="control-label">YouTube Link</label><input type="text" name="youtubelink[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-large remove_button1" id="' +
                    x + '">Delete</a></div></div></div>'; //New input field html
    staff[1][staff_profile]
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
        var maxField = 2; //Input fields increment limitation
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
                    '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Email</label><input type="email" name="email[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-large remove_button2" id="' +
                    x + '">Delete</a></div></div></div>'; //New input field html
    
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
        var maxField = 2; //Input fields increment limitation
        var addButton = $('.add_buttonyoutube_link'); //Add button selector
        var wrapper = $('.field_wrapperyoutube_link'); //Input field wrapper
        var x = 1; //Initial field counter is 1
    
        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                console.log(x);
                var fieldHTML = ' <div class="rowField1' + x +
                    '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Youtube Link</label><input type="text" name="youtube_video[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-large remove_buttonyoutube_link" id="' +
                    x + '">Delete</a></div></div></div>'; //New input field html
    
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
    
@endsection