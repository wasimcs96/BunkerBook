@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')

 @section('content')

<form id="regForm" action="/action_page.php">
<h3>Basic Details</h3>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <div class="col-md-12">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" oninput="this.className = ''" placeholder="Name *" class="form-control" required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email[]" oninput="this.className = ''" placeholder="Email *" class="form-control" required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <a href="javascript:void(0);" class="add_button btn btn-warning btn-sm" title="Add field">Add More fields</a>
        </div>
    </div>
    <div class="col-md-12">
        <label>Select Category</label>
        <div class="multiselect_div">
        <?php $category= App\Models\Category::all(); ?>
            <select id="multiselect1" name="category[]" oninput="this.className = ''" class="selectpicker" multiple data-live-search="true">
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
            <input type="text" oninput="this.className = ''" name="website[]" value="" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <a href="javascript:void(0);" class="add_button btn btn-warning btn-sm" title="Add field">Add More fields</a>
        </div>
    </div>
    <div class="field_wrapper">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Landline</label>
                <input type="text" name="landline[]" oninput="this.className = ''" value="" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <a href="javascript:void(0);" class="add_button btn btn-warning btn-sm" title="Add field">Add More fields</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Address</label>
        <input type="text" name="address" id="address" value="" oninput="this.className = ''" class="form-control geocomplete pac-target-input" placeholder="Enter a location" autocomplete="off">
        <span class="msg_alert_class" id="addressMsg"></span>
        </div>
    </div>
    <!-- <div class="row">                    -->
    <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <select name="country" id="country" class="rounded srs-in" style="width: -webkit-fill-available;border: solid 1px #ccc;padding: .375rem .75rem;" placeholder="Search Any Country .....">
                    <?php $country=App\Models\Country::all(); ?>
                    @foreach($country as $count)
                    <option value="{{ $count->id ?? '' }}">{{ $count->name ?? ''}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="fancy-checkbox col-md-1" style="margin: auto;">
            <label><input type="checkbox" oninput="this.className = ''" name="business_time" value="1"><span>24/7</span></label>
        </div>
    </div>
    <!-- </div> -->
    <!-- <div class="row"> -->
        <!-- <div class="fancy-checkbox col-md-1" style="margin: auto;">
            <label><input type="checkbox" oninput="this.className = ''" name="business_time" value="1"><span>24/7</span></label>
        </div> -->
    <div class="row"> 
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Operating Hours Start</label>
                <input type="time" name="start_time" oninput="this.className = ''" id="start_time" value="" class="form-control">
                <span class="msg_alert_class" id="start_timeMsg"></span>
            </div>
            </div>

            <div class="col-md-5">
            <div class="form-group">
                <label class="control-label">Operating Hours End</label>
                <input type="time" name="end_time" oninput="this.className = ''" id="end_time" value="" class="form-control">
                <span class="msg_alert_class" id="end_timeMsg"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">Bussiness Profile</label>
            <input type="file" name="business_profile" oninput="this.className = ''" accept="image/*" class="form-control">
        </div>
        </div>

        <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">Featured Banner Image</label>
            <input type="file" name="featured_banner_image" oninput="this.className = ''" accept="image/*" class="form-control">
        </div>
    </div>

    <!-- <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
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
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Office Hours</label>
            </div>
        </div>
        <!--sunday-->
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Sunday</label>
                    <select name="sunday" oninput="this.className = ''" id="sunday" class="form-control">
                        <option oninput="this.className = ''" value="open">Open</option>
                        <option oninput="this.className = ''" value="close">Close</option>
                    </select>
                    </div>
            </div>
            <div class="col-md-6" id="sundayDiv" style="display: block;">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="control-label">Hours Start</label>
                            <input oninput="this.className = ''" type="time" name="sunday_start_time" id="sunday_start_time" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="control-label">Hours End</label>
                            <input oninput="this.className = ''" type="time" name="sunday_end_time" id="sunday_end_time" value="" class="form-control">
                            </div>
                        </div>
            </div>
        </div>
        <!--monday-->
        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Monday</label>
                                    <select oninput="this.className = ''" name="monday" id="monday" class="form-control">
                                        <option oninput="this.className = ''" value="open">Open</option>
                                        <option oninput="this.className = ''" value="close">Close</option>

                                    </select>

                                 </div>

                            </div>
                            <div class="col-md-6" id="mondayDiv">

                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours Start</label>
                                            <input oninput="this.className = ''" type="time" name="monday_start_time" id="monday_start_time" value="" class="form-control">

                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours End</label>
                                            <input oninput="this.className = ''" type="time" name="monday_end_time" id="monday_end_time" value="" class="form-control">

                                         </div>
                                      </div>


                            </div>

                          </div>
                          <!--tuesday-->
                         <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tuesday</label>
                                    <select oninput="this.className = ''" name="tuesday" id="tuesday" class="form-control">
                                        <option oninput="this.className = ''" value="open">Open</option>
                                        <option oninput="this.className = ''" value="close">Close</option>

                                    </select>

                                 </div>

                            </div>
                            <div class="col-md-6" id="tuesdayDiv">

                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours Start</label>
                                            <input oninput="this.className = ''" type="time" name="tuesday_start_time" id="tuesday_start_time" value="" class="form-control">

                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours End</label>
                                            <input oninput="this.className = ''" type="time" name="tuesday_end_time" id="tuesday_end_time" value="" class="form-control">

                                         </div>
                                      </div>


                            </div>

                          </div>
                          <!--wednesday-->
                         <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Wednesday</label>
                                    <select oninput="this.className = ''" name="wednesday" id="wednesday" class="form-control">
                                        <option oninput="this.className = ''" value="open">Open</option>
                                        <option oninput="this.className = ''" value="close">Close</option>

                                    </select>

                                 </div>

                            </div>
                            <div class="col-md-6" id="wednesdayDiv">

                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours Start</label>
                                            <input oninput="this.className = ''" type="time" name="wednesday_start_time" id="wednesday_start_time" value="" class="form-control">

                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours End</label>
                                            <input oninput="this.className = ''" type="time" name="wednesday_end_time" id="wednesday_end_time" value="" class="form-control">

                                         </div>
                                      </div>


                            </div>

                          </div>
                          <!--thursday-->
                         <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Thursday</label>
                                    <select oninput="this.className = ''" name="thursday" id="thursday" class="form-control">
                                        <option oninput="this.className = ''" value="open">Open</option>
                                        <option oninput="this.className = ''" value="close">Close</option>

                                    </select>

                                 </div>

                            </div>
                            <div class="col-md-6" id="thursdayDiv">

                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours Start</label>
                                            <input oninput="this.className = ''" type="time" name="thursday_start_time" id="thursday_start_time" value="" class="form-control">

                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours End</label>
                                            <input oninput="this.className = ''" type="time" name="thursday_end_time" id="thursday_end_time" value="" class="form-control">

                                         </div>
                                      </div>


                            </div>

                        </div>
                        <!--Friday-->
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Friday</label>
                                    <select oninput="this.className = ''" name="friday" id="friday" class="form-control">
                                        <option oninput="this.className = ''" value="open">Open</option>
                                        <option oninput="this.className = ''" value="close">Close</option>

                                    </select>

                                 </div>

                            </div>
                            <div class="col-md-6" id="fridayDiv">

                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours Start</label>
                                            <input oninput="this.className = ''" type="time" name="friday_start_time" id="friday_start_time" value="" class="form-control">

                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours End</label>
                                            <input oninput="this.className = ''" type="time" name="friday_end_time" id="friday_end_time" value="" class="form-control">

                                         </div>
                                      </div>


                            </div>

                        </div>
                        <!--saturday-->
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Saturday</label>
                                    <select oninput="this.className = ''" name="Saturday" id="Saturday" class="form-control">
                                        <option oninput="this.className = ''" value="open">Open</option>
                                        <option oninput="this.className = ''" value="close">Close</option>

                                    </select>

                                 </div>

                            </div>
                            <div class="col-md-6" id="sundayDiv" style="display: block;">

                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours Start</label>
                                            <input oninput="this.className = ''" type="time" name="Saturday_start_time" id="Saturday_start_time" value="" class="form-control">

                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="control-label">Hours End</label>
                                            <input oninput="this.className = ''" type="time" name="Saturday_end_time" id="sunday_end_time" value="" class="form-control">

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
                              <input oninput="this.className = ''" type="text" name="staff[0][staff_name]" value="" placeholder="Name" class="form-control my-3">
                              <input oninput="this.className = ''" type="text" name="staff[0][staff_job_title]" value="" placeholder="Job title" class="form-control my-3">
                              <input oninput="this.className = ''" type="text" name="staff[0][staff_email]" value="" placeholder="Email" class="form-control my-3">
                              <input oninput="this.className = ''" type="text" name="staff[0][staff_mobile]" value="" placeholder="Mobile" class="form-control my-3">
                              <input oninput="this.className = ''" type="text" name="staff[0][staff_skype]" value="" placeholder="Skype Id" class="form-control my-3">
                              <textarea name="staff[0][staff_about]" placeholder="About" class="form-control my-3"></textarea>
                              <input oninput="this.className = ''" type="file" name="staff[0][staff_profile]" value="" placeholder="Profile" accept="image/*" class="form-control my-3">

                           </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <a href="javascript:void(0);" class="add_staff_button btn btn-warning btn-sm" title="Add field">Add More Staff</a>
                            </div>
                         </div>
                     </div>
    <!-- <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p> -->
  </div>
  <div class="tab">
    <div class="form-group">
                                <label class=" form-control-label">Photos </label><br>

                                <div class="upload-btn-wrapper">

                                    <!-- <button type="button" class="btn_upload" id="upBtn">Upload a file</button> -->

                                    <input oninput="this.className = ''" type="file" name="business_photos[]" id="photos" class="form-control imageUpload" multiple>

                                </div>
                                <!-- <input name="" id="photo" type="file" class="dropify-frrr" > -->

                                <div id="preview" class="col-md-12">


                                </div>



                            </div>
    <!-- <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p> -->
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
                                <a href="javascript:void(0);" class="add_buttonyoutube_link btn btn-warning btn-sm" title="Add field">Add More fields</a>
                                </div>
                            </div>
    <!-- <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p> -->
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
  background-color: #2E35DA;
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
  background-color: #4CAF50;
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
    document.getElementById("nextBtn").innerHTML = "Submit";
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
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
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

@endsection