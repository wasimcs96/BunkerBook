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
	
											<div style="width: fit-content;">
											<i class="fas fa-user-edit" style="
    position: absolute;
    left: 50%;
    top: 55%;
    color: white;
"></i>
											</div>
                                            	<img class="rounded-circle" @if(isset($user->image))src="{{asset($user->image)}}" @else src="{{asset('assets/images/image-gallery/11.jpg')}}" @endif alt="" style="width:250px;height:250px;">
											</div>
											<!-- <span class="alert alert-error"></span> -->
										</div>
										<input  class="my-5 rounded d-flex m-auto" name="profile_image" value="" type="file" style="border: solid 1px #ccc">
										<div class="form-group">
											<label for="name">First Name</label>
											<input type="text" class="form-control" name="first_name" id="name" value="{{auth()->user()->firstname ?? ' '}}">
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
									<button class="btn btn-primary btn-lg" type="submit" style="font-size: 20px;">Save</button>
										{{-- <button type="submit" id="submit">Save</button> --}}
										<!-- Alert Message -->
										{{-- <div class="alert-notification">
											<div id="message" class="alert-msg"></div>
										</div> --}}
									</div>
									
								<!-- </div> -->
							</form>
						</div>
					</div>
  </div>
    @endsection
	