@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')
    @section('content')
  <div class="container">
  <div class="cta-right my-5">
						<div class="contact-inputs">
							<form class="contact-form d-flex" method="post" action="https://siteforest.tech/templatebucket/lasson/assets/mail/contact.php">
								<!-- <div class="row"> -->
									<div class="col-md-12">

										<div class="form-group text-center col-lg-12">
											<!-- <label for="name">Full Name</label> -->
											<!-- <input type="text" class="form-control" name="name" id="name"> -->
                                            <img class="rounded-circle" src="{{asset('assets/images/image-gallery/11.jpg')}}" alt="" style="width:250px;height:250px;">
											<!-- <span class="alert alert-error"></span> -->
										</div>
										<div class="form-group">
											<label for="name">Full Name</label>
											<input type="text" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
										
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" name="email" id="email">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Mobile No.</label>
											<input type="number" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Company</label>
											<input type="text" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Job Title</label>
											<input type="text" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Location</label>
											<input type="text" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">City</label>
											<input type="text" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
                                        <div class="form-group">
											<label for="name">Country</label>
											<input type="text" class="form-control" name="name" id="name">
											<span class="alert alert-error"></span>
										</div>
									<!-- </div> -->
									<div class="col-md-12 text-center">
										<!-- <div class="form-group">
											<label for="comments">Job Title</label>
											<textarea class="form-control" id="comments" name="comments" rows="5"></textarea>
										</div> -->
										<button type="submit" name="submit" id="submit">Save</button>
										<!-- Alert Message -->
										<div class="alert-notification">
											<div id="message" class="alert-msg"></div>
										</div>
									</div>
								<!-- </div> -->
							</form>
						</div>
					</div>
  </div>
    @endsection