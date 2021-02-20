@extends('frontEnd.layout.master')
@section('title','Consultant')
@section('content')

	<!-- Start header
    ============================================= -->
   @include('frontEnd.layout.header')
    <!-- End header -->

	<div class="clearfix"></div>

	<main class="main">

		<!-- Start Breadcrumb
		=============================================style="background: url(assets/img/breadcrumb/breadcrumb.jpg)"> -->
		<div class="site-breadcrumb" data-background="{{asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
			<div class="breadcrumb-circle">
				<img class="universitylogo" src="{{asset('frontEnd/assets/img/header/header-shape-2.png')}}" class="hero-circle-1" alt="thumb">
			</div>
			<div class="container">
                <div class=kkll>
               <img class="ddgghh"src="{{asset('frontEnd/assets/img/team/team-2.jpg')}}" >
                <h2 class="breadcrumb-title">John Wick</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="index.html">About</a></li>
					<li class="active"><span>Since </span> : <span> 01:08:2020</span></li>
                </ul>
                </div>
			</div>
		</div>
		<!-- End  Breadcrumb -->
        <div class="author-info posi-rel de-padding">
			<div class="author-shape">
				<img src="{{ asset('frontEnd/assets/img/details-page/author-bg.png') }}" alt="thumb">
			</div>
			<div class="container">
				<div class="author-bio-wrapper grid-3">
					<div class="auhtor-pic">
						<img src="{{ asset('frontEnd/assets/img/team/team-2.jpg')}}" alt="thumb">
					</div>
					<div class="auhtor-con">
						<h5>John Wick</h5>
						<h6>Admission Conformed | since	:   200+ | 2000</h6>
						<ul class="author-list">
							<li>Approved by : Lasson</li>
                            <li>Membership type :	Premium</li>
                            <li>Most Admission in :	MIT , RTU , JNU</li>
							<li>
								<div class="author-rating">
									<p>Reviews:</p>
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><span>(35k)</span></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="auhtor-text">
						<h5>About John Wick:</h5>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt at quod quaerat natus quidem similique, itaque magnam. Aperiam libero, eligendi laboriosam maxime dolore animi ad quae cum distinctio atque!

                        </p>
							<a href="{{route('consultant.book')}}" class="custm-btn btn-2">Book Now</a>

                    </div>

                </div>

			</div>
		</div>
		<!-- Start Team
		============================================= -->
		{{-- <div class="team-area de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="Professors" class="site-title text-center">
							<img src="{{asset('frontEnd/assets/img/heading/choose.png')}}" alt="thumb">
							<span class="sub-head">Affiliated University</span>
							<h2>Most Suggested University</h2>
						</div>
					</div>
                </div>

				<div class="team-wrapper owl-carousel owl-theme">
					<div class="team-box">
						<div class="team-pic">
							<img src="{{asset('frontEnd/assets/img/team/t-2.jpg')}}" alt="thumb">
							<div class="team-social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h5>Cardu Manyon</h5>
							<span>Teacher of Development Company</span>
						</div>
					</div>
					<div class="team-box">
						<div class="team-pic">
							<img src="{{asset('frontEnd/assets/img/team/t-2.jpg')}}" alt="thumb">
							<div class="team-social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h5>Marshall Harris</h5>
							<span>Web Designer</span>
						</div>
					</div>
					<div class="team-box">
						<div class="team-pic">
							<img src="{{asset('frontEnd/assets/img/team/t-3.jpg')}}" alt="thumb">
							<div class="team-social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h5>Nicholas Gregory</h5>
							<span>Web Developer</span>
						</div>
					</div>
					<div class="team-box">
						<div class="team-pic">
							<img src="{{asset('frontEnd/assets/img/team/t-2.jpg')}}" alt="thumb">
							<div class="team-social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-info">
							<h5>Marshall Harris</h5>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Team -->
        <div class="reg-area posi-rel de-padding" data-background="{{asset('frontEnd/assets/img/animation/reg-bg.jpg')}}">

            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div data-text="Our History" class="site-title wh text-center">
                            <img src="{{asset('frontEnd/assets/img/heading/choose.png')}}" alt="thumb">
                            <span class="sub-head">Working since 1990</span>
                            <h2>Milestone of 10 years</h2>
                        </div>
                    </div>
                </div>
                <div class="counter-wrapper grid-4">
                    <div class="fun-fact">
                        <img src="{{asset('frontEnd/assets/img/counter/1.png')}}" alt="thumb">
                        <div class="fun-desc">
                            <p class="timer" data-to="250" data-speed="3000"></p>
                            <span class="medium">Universities</span>
                        </div>
                    </div>
                    <div class="fun-fact fun-active">
                        <img src="{{asset('frontEnd/assets/img/counter/2.png')}}" alt="thumb">
                        <div class="fun-desc">
                            <p class="timer" data-to="9000" data-speed="3000">9000</p>
                            <span class="medium">Happy Students</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <img src="{{asset('frontEnd/assets/img/counter/3.png')}}" alt="thumb">
                        <div class="fun-desc">
                            <p class="timer" data-to="850" data-speed="3000">850</p>
                            <span class="medium">Meetings Done</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <img src="{{asset('frontEnd/assets/img/counter/4.png')}}" alt="thumb">
                        <div class="fun-desc">
                            <p class="timer" data-to="502" data-speed="3000">502</p>
                            <span class="medium">Admissions Done</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<!-- Start Team-2
		============================================= -->
		<div class="team-2-area bg-3 de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="Lecturer" class="site-title text-center">
							{{-- <span class="sub-head">Affiliated University</span> --}}
							<h2>Highly Suggested Universities </h2>
						</div>
					</div>
				</div>
				<div class="team-2-wrapper grid-4">
					<div class="team-2-box">
						<div class="team-2-pic">
							<img src="{{asset('frontEnd/assets/img/partner/img-2.jpg')}}" alt="thumb">
							<ul class="team-2-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="team-2-content">
							<h5>MIT</h5>
							<span>Data Science</span>
						</div>
					</div>
					<div class="team-2-box">
						<div class="team-2-pic">
							<img src="{{asset('frontEnd/assets/img/partner/img-2.jpg')}}" alt="thumb">
							<ul class="team-2-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="team-2-content">
							<h5>JNU</h5>
							<span>Machine Learning</span>
						</div>
					</div>
					<div class="team-2-box">
						<div class="team-2-pic">
							<img src="{{asset('frontEnd/assets/img/partner/img-2.jpg')}}" alt="thumb">
							<ul class="team-2-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="team-2-content">
							<h5>RTU</h5>
							<span>Tommie Hansen</span>
						</div>
					</div>
					<div class="team-2-box">
						<div class="team-2-pic">
							<img src="{{asset('frontEnd/assets/img/partner/img-2.jpg')}}" alt="thumb">
							<ul class="team-2-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="team-2-content">
							<h5>HARWARD</h5>
							<span>Web Developer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Team-2 -->
        <div id="portfolio" class="portfolio-area course-2 de-pb">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-8">
						<div class="site-title-left">
							<h2>Top Enrolled Courses</h2>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="site-title-right">
							<h2>Course</h2>
						</div>
					</div>
				</div>
				<div class="portfolio-items-area">
					<div class="row">
						<div class="col-xl-12 portfolio-content">
							<div class="row align-items-center">
								<div class="col-xl-8">
									<div class="mix-item-menu active-theme">
										<button class="active" data-filter="*">All</button>
										<button data-filter=".btech" class="">B.tech</button>
										<button data-filter=".barch" class="">B.arch</button>
										<button data-filter=".bhmct" class="">BHMCT  </button>
										<button data-filter=".mtech" class="">M.tech</button>
										<button data-filter=".march" class="">M.Arch</button>
										<button data-filter=".phd" class="">PHD</button>
										<button data-filter=".mba" class="">MBA</button>

                                    </div>
								</div>
								<div class="col-xl-4">
									<div class="course-view-more">
										<h6>Total Courses 6768 - <a href="#">View All</a></h6>
									</div>
								</div>
							</div>
							<!-- End Mixitup Nav-->
							<div class="magnific-mix-gallery masonary">
								<div id="portfolio-grid" class="portfolio-items">
									<div class="pf-item btech">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-1.jpg')}}" class="course-img" alt="thumb">

                                            </div>
                                            <div class="course-2-content">

                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Control & Instrumentation</h5></a>

                                            </div>

												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
													</div>
													<div class="course-2-price">
														Presently Studing:<span>+37,500 </span>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="pf-item barch">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-2.jpg')}}" class="course-img" alt="thumb">
												<div class="course-2-pic-content">
												</div>
											</div>
                                            <div class="course-2-content">

                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Control & Instrumentation</h5></a>

                                            </div>
												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
													</div>
													<div class="course-2-price">
													Presently Studing:<span>+12 </span>
													</div>
												</div>

											</div>
										</div>
                                    </div>
                                    {{-- ******************************* --}}
									<div class="pf-item bhmct">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-3.jpg')}}" class="course-img" alt="thumb">
												<div class="course-2-pic-content">
												</div>
                                            </div>
                                            <div class="course-2-content">
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Control & Instrumentation</h5></a>

                                            </div>

												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
													</div>
													<div class="course-2-price">
														Presently Studing:<span>+500 </span>
													</div>
												</div>

											</div>
										</div>
                                    </div>
                                    {{-- ********************************** --}}
									<div class="pf-item mtech">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-1.jpg')}}" class="course-img" alt="thumb">

											</div>
											<div class="course-2-content">

												<div class="course-2-text">
													<a href="course-details.html"><h5>Control & Instrumentation</h5></a>

												</div>
												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
													</div>
													<div class="course-2-price">
														Presently Studing:<span>+500 </span>
													</div>
												</div>

											</div>
										</div>
                                    </div>
                                    {{-- ***************************************** --}}
									<div class="pf-item march">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-2.jpg')}}" class="course-img" alt="thumb">

											</div>
											<div class="course-2-content">

												<div class="course-2-text">
													<a href="course-details.html"><h5>Urban Design</h5></a>

												</div>
												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0"></p>
													</div>
													<div class="course-2-price">
                                                        presently Studing:<span>10+ </span>
													</div>
												</div>

											</div>
										</div>
                                    </div>
										<div class="pf-item phd">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-2.jpg')}}" class="course-img" alt="thumb">

											</div>
											<div class="course-2-content">

												<div class="course-2-text">
													<a href="course-details.html"><h5>Engineering</h5></a>

												</div>
												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0"></p>
													</div>
													<div class="course-2-price">
                                                        presently Studing:<span>15+ </span>
													</div>
												</div>

											</div>
										</div>
                                    </div>

                                    {{-- ********************************** --}}
									<div class="pf-item mba">
										<div class="course-2-box">
											<div class="course-2-pic">
												<img src="{{ asset('frontEnd/assets/img/course/course-3.jpg')}}" class="course-img" alt="thumb">

											</div>
											<div class="course-2-content">

												<div class="course-2-text">
													<a href="course-details.html"><h5>Business Administration</h5></a>

												</div>
												<div class="course-2-bottom">
													<div class="course-2-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0"></p>
													</div>
													<div class="course-2-price">
                                                        presently Studing:<span>20+</span>
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
			</div>
			<div class="more-btn">
				<a href="#">View More <i class="ti ti-arrow-right"></i></a>
			</div>
		</div>
	</main>

	<div class="clearfix"></div>
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
	@endsection
@section('per_page_script')


@endsection
