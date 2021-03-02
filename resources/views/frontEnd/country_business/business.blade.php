@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')


 @section('content')

 <!-- Start Search
		============================================= -->
		<div class="t-area header-1-1 de-padding">
			<div class="container">
				<div class="feature-wrapper un-form">
					<form>
						<!-- <input type="text" class="srs-in" placeholder="Search Any Country ....."> -->
						<select name="country" id="country" class="srs-in" placeholder="Search Any Country .....">
							<option value="volvo">Australia</option>
							<option value="saab">Newzealand</option>
							<option value="mercedes">Canada</option>
							<option value="audi">India</option>
							</select>
						<button type="submit" class="srs-bt">Search</button>
					</form>
				</div>
			</div>
		</div>
		<!-- End  Search-->
 <div id="portfolio" class="portfolio-area de-padding">
			<div class="container">
				<!-- <div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="Courses" class="site-title wh text-center">
							<img src="assets/img/heading/choose.png" alt="thumb">
							<span class="sub-head">Find Perfect one</span>
							<h2>Choose your perfect one</h2>
						</div>
					</div>
				</div> -->
				<div class="portfolio-items-area">
					<div class="row">
						<div class="col-xl-12 portfolio-content">
							<!-- <div class="mix-item-menu active-theme text-center">
								<button class="active" data-filter="*">All</button>
								<button data-filter=".development" class="">Science</button>
								<button data-filter=".design" class="">Engineering</button>
								<button data-filter=".photography" class="">Diploma  </button>
								<button data-filter=".branding" class="">Web Design</button>
								<button data-filter=".video" class="">Web Development</button>
							</div> -->
							<!-- End Mixitup Nav-->
							<div class="magnific-mix-gallery masonary">
								<div id="portfolio-grid" class="portfolio-items">
									<div class="pf-item video photography">
										<div class="course-box rounded" style="border: solid 5px #2E35D9;">
											<div class="course-pic">
												<img src="assets/img/course/course-1.jpg" class="course-img" alt="thumb">
												<div class="course-pic-content">
													<div class="course-rating">
														<span><i class="fa fa-heart rounded-circle" aria-hidden="true" style="
															background: white;
															padding: 5px;
															border: 5px;"></i></span>



													</div>
													<div class="course-author-time">
														<div class="course-author-pic">
															<img src="assets/img/course/user-1.jpg" alt="thumb">
															<h6>benjamin Nicholas</h6>
														</div>
														<div class="course-time">
															<i class="fas fa-book-open"></i>
															<span>3:56:59</span>
														</div>
													</div>
												</div>
											</div>
											<div class="course-content">
												<div class="course-tags">
													<div class="course-tags-link">
														<a href="#">Software</a>
														<a href="#">Data</a>
													</div>
													<div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div>
												</div>
												<div class="course-text">
													<a href="course-details.html"><h5>Computer Science Course 42</h5></a>
													<p>
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p>
												</div>
												<div class="course-bottom">
													<button class="course-btn">Enroll course <i class="ti ti-arrow-right"></i></button>
													<span>$15.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="pf-item video photography">
										<div class="course-box">
											<div class="course-pic">
												<img src="assets/img/course/course-2.jpg" class="course-img" alt="thumb">
												<div class="course-pic-content">
													<div class="course-rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span>(12k)</span>
													</div>
													<div class="course-author-time">
														<div class="course-author-pic">
															<img src="assets/img/course/user-1.jpg" alt="thumb">
															<h6>benjamin Nicholas</h6>
														</div>
														<div class="course-time">
															<i class="fas fa-book-open"></i>
															<span>3:56:59</span>
														</div>
													</div>
												</div>
											</div>
											<div class="course-content">
												<div class="course-tags">
													<div class="course-tags-link">
														<a href="#">Software</a>
														<a href="#">Data</a>
													</div>
													<div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div>
												</div>
												<div class="course-text">
													<a href="course-details.html"><h5>Computer Science Course 42</h5></a>
													<p>
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p>
												</div>
												<div class="course-bottom">
													<button class="course-btn">Enroll course <i class="ti ti-arrow-right"></i></button>
													<span>$15.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="pf-item video photography">
										<div class="course-box">
											<div class="course-pic">
												<img src="assets/img/course/course-3.jpg" class="course-img" alt="thumb">
												<div class="course-pic-content">
													<div class="course-rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span>(12k)</span>
													</div>
													<div class="course-author-time">
														<div class="course-author-pic">
															<img src="assets/img/course/user-1.jpg" alt="thumb">
															<h6>benjamin Nicholas</h6>
														</div>
														<div class="course-time">
															<i class="fas fa-book-open"></i>
															<span>3:56:59</span>
														</div>
													</div>
												</div>
											</div>
											<div class="course-content">
												<div class="course-tags">
													<div class="course-tags-link">
														<a href="#">Software</a>
														<a href="#">Data</a>
													</div>
													<div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div>
												</div>
												<div class="course-text">
													<a href="course-details.html"><h5>Computer Science Course 42</h5></a>
													<p>
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p>
												</div>
												<div class="course-bottom">
													<button class="course-btn">Enroll course <i class="ti ti-arrow-right"></i></button>
													<span>$15.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="pf-item video photography">
										<div class="course-box">
											<div class="course-pic">
												<img src="assets/img/course/course-1.jpg" class="course-img" alt="thumb">
												<div class="course-pic-content">
													<div class="course-rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span>(12k)</span>
													</div>
													<div class="course-author-time">
														<div class="course-author-pic">
															<img src="assets/img/course/user-1.jpg" alt="thumb">
															<h6>benjamin Nicholas</h6>
														</div>
														<div class="course-time">
															<i class="fas fa-book-open"></i>
															<span>3:56:59</span>
														</div>
													</div>
												</div>
											</div>
											<div class="course-content">
												<div class="course-tags">
													<div class="course-tags-link">
														<a href="#">Software</a>
														<a href="#">Data</a>
													</div>
													<div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div>
												</div>
												<div class="course-text">
													<a href="course-details.html"><h5>Computer Science Course 42</h5></a>
													<p>
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p>
												</div>
												<div class="course-bottom">
													<button class="course-btn">Enroll course <i class="ti ti-arrow-right"></i></button>
													<span>$15.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="pf-item design design branding development">
										<div class="course-box">
											<div class="course-pic">
												<img src="assets/img/course/course-2.jpg" class="course-img" alt="thumb">
												<div class="course-pic-content">
													<div class="course-rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span>(12k)</span>
													</div>
													<div class="course-author-time">
														<div class="course-author-pic">
															<img src="assets/img/course/user-1.jpg" alt="thumb">
															<h6>benjamin Nicholas</h6>
														</div>
														<div class="course-time">
															<i class="fas fa-book-open"></i>
															<span>3:56:59</span>
														</div>
													</div>
												</div>
											</div>
											<div class="course-content">
												<div class="course-tags">
													<div class="course-tags-link">
														<a href="#">Software</a>
														<a href="#">Data</a>
													</div>
													<div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div>
												</div>
												<div class="course-text">
													<a href="course-details.html"><h5>Computer Science Course 42</h5></a>
													<p>
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p>
												</div>
												<div class="course-bottom">
													<button class="course-btn">Enroll course <i class="ti ti-arrow-right"></i></button>
													<span>$15.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="pf-item design design branding development">
										<div class="course-box">
											<div class="course-pic">
												<img src="assets/img/course/course-1.jpg" class="course-img" alt="thumb">
												<div class="course-pic-content">
													<div class="course-rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span>(12k)</span>
													</div>
													<div class="course-author-time">
														<div class="course-author-pic">
															<img src="assets/img/course/user-1.jpg" alt="thumb">
															<h6>benjamin Nicholas</h6>
														</div>
														<div class="course-time">
															<i class="fas fa-book-open"></i>
															<span>3:56:59</span>
														</div>
													</div>
												</div>
											</div>
											<div class="course-content">
												<div class="course-tags">
													<div class="course-tags-link">
														<a href="#">Software</a>
														<a href="#">Data</a>
													</div>
													<div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div>
												</div>
												<div class="course-text">
													<a href="course-details.html"><h5>Computer Science Course 42</h5></a>
													<p>
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p>
												</div>
												<div class="course-bottom">
													<button class="course-btn">Enroll course <i class="ti ti-arrow-right"></i></button>
													<span>$15.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>		 
			</div>
			<!-- <div class="more-btn">
				<a href="#">View All Courses <i class="ti ti-arrow-right"></i></a>
			</div> -->
		</div>  
 @endsection