@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')

	<!-- Start Categories
		============================================= -->
		<div class="cat-area de-padding">
			<div class="container my-4">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="categories" class="site-title text-center">
							
							<h2>Check all categories and enroll </h2>
						</div>
					</div>
				</div>
				<div class="cat-wrapper grid-4">
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/1.jpg" alt="thumb">
							<div class="cat-badge">
								<span>28</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Computer Science</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/2.jpg" alt="thumb">
							<div class="cat-badge">
								<span>30</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>See all Courses</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/3.jpg" alt="thumb">
							<div class="cat-badge">
								<span>50</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Programming</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/4.jpg" alt="thumb">
							<div class="cat-badge">
								<span>23</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Analysis of Algorithms</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/5.jpg" alt="thumb">
							<div class="cat-badge">
								<span>60</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Engineering</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/6.jpg" alt="thumb">
							<div class="cat-badge">
								<span>56</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Art & Designing</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/7.jpg" alt="thumb">
							<div class="cat-badge">
								<span>67</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Artificial Intelligence</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
					<div class="cat-box">
						<div class="cat-pic">
							<img src="assets/img/categories/8.jpg" alt="thumb">
							<div class="cat-badge">
								<span>63</span>
							</div>
						</div>
						<div class="cat-title">
							<h5>Medical Doctor</h5>
							<span><i class="ti ti-arrow-right"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="more-btn">
				<a href="#">View All Courses <i class="ti ti-arrow-right"></i></a>
			</div>
		</div>
		<!-- End Categories-->
 @section('content')
 @endsection