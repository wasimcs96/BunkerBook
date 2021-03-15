@extends('frontEnd.layout.master')
@section('title','Consultant')
@section('content')

<!-- Start header
    ============================================= -->
@include('frontEnd.layout.headerindex')


<!-- Start Contact
		============================================= -->
		<div class="cta-area cta-3  de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="Contact Us" class="site-title text-center">
							<span class="sub-2">What's update now?</span>
							<h2>Have any Suggestions? Feel Free to Say...</h2>
						</div>
					</div>
				</div>
				<div class="cta-wrapper grid-2">
					<div class="cta-left" style="background: url(assets/img/footer/contact-left-bg.png)">
						<h2>Check Us Out...</h2>
						<div class="cta-left-wrap">
							<div class="cta-left-single">
								<!-- <i class="fas fa-map-marker-alt"></i> -->
                                <i class="far fa-newspaper"></i>
								<div class="cta-left-single-txt">
									<a href="{{route('newsfeed.view')}}"><h5>Newsfeed</h5></a>
									<span>Check Our Latest Newsfeed</span>
								</div>
							</div>
							<div class="cta-left-single">
								<!-- <i class="fas fa-phone-volume"></i> -->
                                <i class="far fa-address-card"></i>
								<div class="cta-left-single-txt">
									<a href="{{route('about_us')}}"><h5>About</h5></a>
									<span>Who We Are...?</span>
								</div>
							</div>
							<div class="cta-left-single">
								<!-- <i class="fas fa-envelope"></i> -->
                                <i class="far fa-calendar-alt"></i>
								<div class="cta-left-single-txt">
									<a href="{{route('event.front.index')}}"><h5>Events</h5></a>
									<span>Latest events Here</span>
								</div>
							</div>
						</div>
					</div>
					<div class="cta-right">
						<div class="contact-inputs">
							<form  method="post" action="{{route('feedback.store') }}" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="name">Subject</label>
											<input type="text" class="form-control" name="subject" id="name">
											<span class="alert alert-error"></span>
										</div>
										<div class="form-group">
											<label for="comments">Message</label>
											<textarea class="form-control" id="comments" name="message" rows="5"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="email">ScreenShots</label>
											<input  class="my-5 rounded d-flex m-auto" name="image" accept="image/*" value="" type="file" style="width: 100%; border: solid 1px #ccc">
											<span class="alert alert-error"></span>
										</div>
										<button type="submit" class="btn btn-primary" name="submit" id="submit" style="
										width: 167px;
										height: 29.5px;
										font-size: 12px;
										background: #FFA500;
										border: #FFA500;
									">
											Send Feedback
										</button>
										<!-- Alert Message -->
									
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Contact -->


@endsection