@extends('frontEnd.layout.master')
@section('title','Consultant')
@section('content')

	<!-- Start header
    ============================================= -->
   @include('frontEnd.layout.headerindex')
    <!-- End header -->

	<div class="clearfix"></div>

    <main class="main">
		
		<!-- Start Breadcrumb
		============================================= -->
		<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/breadcrumb.jpg)">
			<div class="breadcrumb-circle">
				<img src="assets/img/header/header-shape-2.png" class="hero-circle-1" alt="thumb">
			</div>
			<div class="container">
			<h2 class="breadcrumb-title">Contact Us</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="index.html">Home</a></li>
					<li class="active">contact</li>
				</ul>
			</div>
		</div>
		<!-- End  Breadcrumb -->
		
		<!-- Start Address
		============================================= -->
		<div class="addr-area bg-2 de-padding">
			<div class="container">
				<div class="addr-wrapper grid-3">
					<div class="addr-single">
						<i class="fas fa-map-marker-alt"></i>
						<div class="addr-single-txt">
							<h5>Head office</h5>
							<span>454 read, 36 Floor New York, USA</span>
						</div>
					</div>
					<div class="addr-single addr-single-active">
						<i class="fas fa-phone-volume"></i>
						<div class="addr-single-txt">
							<h5>Call Us Direct</h5>
							<span>+190-96963369</span>
						</div>
					</div>
					<div class="addr-single">
						<i class="fas fa-envelope"></i>
						<div class="addr-single-txt">
							<h5>Email Us</h5>
							<span>info@support.com</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Address-->
		
		<!-- Start Contact
		============================================= -->
		<div class="cta-area cta-3  de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="Contact Us" class="site-title text-center">
							<span class="sub-2">What's update now?</span>
							<h2>Have any questions? Get in touch</h2>
						</div>
					</div>
				</div>
				<div class="cta-wrapper grid-2">
					<div class="cta-left" style="background: url(assets/img/footer/contact-left-bg.png)">
						<h2>Get in touch for any questions?</h2>
						<div class="cta-left-wrap">
							<div class="cta-left-single">
								<i class="fas fa-map-marker-alt"></i>
								<div class="cta-left-single-txt">
									<h5>Head office</h5>
									<span>454 read, 36 Floor New York, USA</span>
								</div>
							</div>
							<div class="cta-left-single">
								<i class="fas fa-phone-volume"></i>
								<div class="cta-left-single-txt">
									<h5>Call Us Direct</h5>
									<span>+190-96963369</span>
								</div>
							</div>
							<div class="cta-left-single">
								<i class="fas fa-envelope"></i>
								<div class="cta-left-single-txt">
									<h5>Email Us</h5>
									<span>info@support.com</span>
								</div>
							</div>
						</div>
					</div>
					<div class="cta-right">
						<div class="contact-inputs">
							<form class="contact-form" method="post" action="https://siteforest.tech/templatebucket/lasson/assets/mail/contact.php">
								<div class="row">
									<div class="col-md-12">
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
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="comments">Write Something</label>
											<textarea class="form-control" id="comments" name="comments" rows="5"></textarea>
										</div>
										<button type="submit" name="submit" id="submit">
											Send your Message
										</button>
										<!-- Alert Message -->
										<div class="alert-notification">
											<div id="message" class="alert-msg"></div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Contact -->
		
		<!-- Start Google Map
		============================================= -->
		<div class="g-map-area">
			<div class="g-map--wrapper text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.133068555471!2d91.08454181482016!3d23.99107768447128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754051b50ebac3f%3A0x735c1cc426d8ebb!2sNatai%20Bodtoli%20Bazar%2C%20Natai%2C%2C%20Brahmanbaria!5e0!3m2!1sen!2sbd!4v1594548160557!5m2!1sen!2sbd"></iframe>
			</div>
		</div>
		<!-- End Google Map-->
		
	</main>	
	<div class="clearfix"></div>
    
	@endsection
@section('per_page_script')


@endsection
