@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')
    @section('content')
	<?php $user= auth()->user()?>
  <div class="container">
  <div class="cta-right my-5">
						<div class="contact-inputs">
							<form   action="{{route('user.info',$user->id)}}" method="POST">
								@csrf
								<!-- <div class="row"> -->
									<div class="col-md-12">

										<div class="form-group text-center col-lg-12">
											<!-- <label for="name">Full Name</label> -->
											<!-- <input type="text" class="form-control" name="name" id="name"> -->
											<h3>Update Your Profile Here...</h3>
											<div class="pen" style="width: fit-content;margin: auto;">
											<i class="fas fa-user-edit" style="
    position: absolute;
    left: 50%;
    top: 55%;
    color: white;
"></i>
                                            	<img class="rounded-circle" @if(isset($user->image))src="{{asset($user->image)}}" @else src="{{asset('assets/images/image-gallery/11.jpg')}}" @endif alt="" style="width:250px;height:250px;">
											</div>
											<!-- <span class="alert alert-error"></span> -->
										</div>
										<div class="form-group">
											<label for="name">First Name</label>
											<input type="text" class="form-control" name="first_name" id="name">
											<span class="alert alert-error"></span>
										</div>
										<div class="form-group">
											<label for="name">Last Name</label>
											<input type="text" class="form-control" name="last_name" id="name">
											<span class="alert alert-error"></span>
										</div>
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" name="email" id="email">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Mobile No.</label>
											<input type="number" class="form-control" name="mobile" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Company</label>
											<input type="text" class="form-control" name="company" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Job Title</label>
											<input type="text" class="form-control" name="job_title" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Address</label>
											<input type="text" class="form-control" name="address" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">City</label>
											<input type="text" class="form-control" name="city" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Country</label>
											<input type="text" class="form-control" name="country" id="name">
											<span class="alert alert-error"></span>
										</div>
									<!-- </div> -->
									<div class="col-md-12 text-center">
									<button class="btn btn-primary btn-lg" type="submit">sdfsad</button>
										{{-- <button type="submit" id//="submit">Save</button> --}}
										<!-- Alert Message -->
										{{-- <div class="alert-notification">
											<div id="message" class="alert-msg"></div>
										</div> --}}
									</div>
								<!-- </div> -->
							</form>

							<form id="regForm" action="/action_page.php">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
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
						</div>
					</div>
  </div>
    @endsection