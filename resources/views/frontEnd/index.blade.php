@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')


 @section('content')
	<!-- Start PreLoader-->

	<!-- Start header
    ============================================= -->

    <!-- End header -->



		<!-- Start Hero
		============================================= -->
	@include('frontEnd.layout.hero')
		<!-- End Hero -->

		<!-- Start Search
		============================================= -->
		<!-- <div class="t-area header-1-1 de-padding">
			<div class="container">
				<div class="feature-wrapper un-form">
					<form>
						<input type="text" class="srs-in" placeholder="Search Any Course or University">
						<button type="submit" class="srs-bt">Search</button>
					</form>
				</div>
			</div>
		</div> -->
		<!-- End  Search-->

		<!-- Start Booking Step
		============================================= -->
	@include('frontEnd.layout.bookingstep')
		<!-- End Booking Step-->

		<!-- Start Welcome Project
		============================================= frontEnd/assets/img/about/ab-2-pic.jpg style="background-image: url(frontEnd/assets/img/about/about-bg.png)"-->
        @include('frontEnd.layout.project')
		<!-- End Welcome Project-->

		<!-- Start Categories
		============================================= -->
		@include('frontEnd.layout.categories')
		<!-- End Categories-->

		<!-- Start Wh
		============================================= -->
		{{-- <div class="wh-area de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="Choose us" class="site-title text-center">
							<img src="{{ asset('frontEnd/assets/img/heading/choose.png') }}" alt="thumb">
							<span class="sub-head">Reasons to choose</span>
							<h2>Why choose our Services? Best way to shine <span>Business</span></h2>
						</div>
					</div>
				</div>
				<div class="wh-wrapper owl-carousel owl-theme">
					<div class="wh-box">
						<div class="wh-pic">
							<img src="{{ asset('frontEnd/assets/img/choose/ch-3.jpg') }}" alt="thumb">
						</div>
						<div class="wh-content">
							<div class="wh-cate">
								<span>Categories:Oil,Bunker</span>
							</div>
							<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit</h6>
						</div>
						<img src="{{ asset('frontEnd/assets/img/choose/choose-icon.png') }}" class="wh-icon-float" alt="thumb">
					</div>
					<div class="wh-box">
						<div class="wh-pic">
							<img src="{{ asset('frontEnd/assets/img/choose/ch-3.jpg') }}" alt="thumb">
						</div>
						<div class="wh-content">
							<div class="wh-cate">
								<span>Categories:Oil,Bunker</span>
							</div>
							<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit</h6>
						</div>
						<img src="{{ asset('frontEnd/assets/img/choose/choose-icon.png') }}" class="wh-icon-float" alt="thumb">
					</div>
					<div class="wh-box">
						<div class="wh-pic">
							<img src="{{ asset('frontEnd/assets/img/choose/ch-3.jpg') }}" alt="thumb">
						</div>
						<div class="wh-content">
							<div class="wh-cate">
								<span>Categories:Oil,Bunker</span>
							</div>
							<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit</h6>
						</div>
						<img src="{{ asset('frontEnd/assets/img/choose/choose-icon.png') }}" class="wh-icon-float" alt="thumb">
					</div>
					<div class="wh-box">
						<div class="wh-pic">
							<img src="{{ asset('frontEnd/assets/img/choose/ch-3.jpg') }}" alt="thumb">
						</div>
						<div class="wh-content">
							<div class="wh-cate">
								<span>Categories:Oil,Bunker</span>
							</div>
							<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit</h6>
						</div>
						<img src="{{ asset('frontEnd/assets/img/choose/choose-icon.png') }}" class="wh-icon-float" alt="thumb">
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Wh-->

		<!-- Start Course
		============================================= style="background: url(frontEnd/assets/img/course/course-bg.jpg)" -->
      <!-- @include('frontEnd.layout.course') -->
		<!-- End Course-->

<!-- Start Event
		============================================= -->
		@include('frontEnd.layout.event')
		<!-- End Event -->

		<!-- Start Address
		============================================= -->
		@include('frontEnd.layout.address')
		<!-- End Address-->

		<!-- Start Team
		============================================= -->
	<!-- @include('frontEnd.layout.consultant') -->
		<!-- End Team -->

		<!-- Start Review of clients
		============================================= style="background: url(frontEnd/assets/img/review/review-bg.jpg)"-->
@include('frontEnd.layout.review')
		<!-- End Review -->

		<!-- Start Blog or Reasons to Choose
		============================================= -->
		@include('frontEnd.layout.reasonstochoose')
		<!-- End Blog-->

		<!-- Start Counter
		=============================================  style="background: url(frontEnd/assets/img/review/review-bg.jpg)" -->
       @include('frontEnd.layout.experience')
		<!-- End Counter-->

		<!-- Start Partner
		============================================= -->
		<!-- <div class="partner-area bg-2 de-padding">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div data-text="Choose us" class="site-title text-center">
				<img src="assets/img/heading/choose.png" alt="thumb">
				Events Gallery
				<div class="partner-wrapper owl-carousel owl-theme">
					<img src="assets/img/event/event-1.jpg" alt="thumb">
					<img src="assets/img/event/event-2.jpg" alt="thumb">
					<img src="assets/img/event/event-3.jpg" alt="thumb">
					<img src="assets/img/event/event-4.jpg" alt="thumb">
					<img src="assets/img/event/event-2.jpg" alt="thumb">
					<img src="assets/img/event/event-2.jpg" alt="thumb">
					<img src="assets/img/event/event-1.jpg" alt="thumb">

				</div>
			</div>
		</div> -->
		<!-- End Partner-->




    {{-- @include('frontEnd.layout.footer') --}}
@endsection
