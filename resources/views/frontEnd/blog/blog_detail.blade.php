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
			<div class="container">
			<h2 class="breadcrumb-title">{{$blog->title ?? ''}}</h2>
				<ul class="breadcrumb-menu clearfix">
					{{-- <li><a href="index.html">Home</a></li>
					<li class="active">blog</li> --}}
				</ul>
			</div>
		</div>
		<!-- End  Breadcrumb -->
		
		<!-- Start Blog-Content
		============================================= -->
		<div class="single-area de-padding clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="single-content">
							<div class="single-page-meta-content">
									<ul>
										<li>
											<div class="single-meta-box single-admin-meta">
												<img src="assets/img/singlepost/40.png" alt="thumb">
												<div class="single-admin-bio">
													<h5>By: John R Peter</h5>
												</div>
											</div>
										</li>
										<li>
											<div class="single-meta-box single-meta-date">
												<i class="fas fa-calendar-alt"></i>
												<div class="single-admin-bio">
													<h5> Jan 20, 2019</h5>
												</div>
											</div>
										</li>
										<li>
											<div class="single-meta-box single-meta-comments">
												<i class="far fa-comment"></i>
												<div class="single-admin-bio">
													<h5>Comments: 2</h5>
												</div>
											</div>
										</li>
									</ul>
								</div>
							<div class="single-page-img">
								<img src="{{asset($blog->image ?? '')}}" style="
                                width: 729px;
                                height: auto;
                            " alt="thumb">
							</div>
							<div class="course-syl-con mt-30">
								<div class="course-syl-con-header">
									<h2>{{($blog->title)}}</h2>
									<p>
										{!! $blog->description ?? '' !!}
									</p>
								</div>
								<div class="course-syl-con-bottom">
                    <a href="{{$blog->youtube_link}}" target="_blank">  Youtube 	</a>						
                                                    </div>
							</div>
							{{-- <div class="single-content-share">
								<h5>Share:</h5>
								<ul class="team-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fas fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="single-comments-section">
								<h2 class="single-content-title">Comments</h2>
								<div class="single-commentor">
									<ul>
										<li>
											<div class="single-commentor-user">
												<img src="assets/img/singlepost/user-1.png" alt="thumb">
												<div class="single-commentor-user-bio">
													<div class="single-commentor-user-bio-head">
														<h6>Diego Fou <span>jan 06 2019</span></h6>
														<a href="#"><i class="fas fa-reply-all"></i>Reply</a>
													</div>
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="single-commentor-user rlp">
												<img src="assets/img/singlepost/user-2.png" alt="thumb">
												<div class="single-commentor-user-bio">
													<div class="single-commentor-user-bio-head">
														<h6>Fiego Fou <span>jan 06 2019</span></h6>
														<a href="#"><i class="fas fa-reply-all"></i>Reply</a>
													</div>
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="single-commentor-user">
												<img src="assets/img/singlepost/user-3.png" alt="thumb">
												<div class="single-commentor-user-bio">
													<div class="single-commentor-user-bio-head">
														<h6>Hiego Fou <span>jan 06 2019</span></h6>
														<a href="#"><i class="fas fa-reply-all"></i>Reply</a>
													</div>
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .
													</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="single-comments-section-form">
									<h2 class="single-content-title">Leave a Reply</h2>
									<form>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Your Name*">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control" placeholder="Your Email*">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
												</div>
												<button type="submit">
													Submit
												</button>
											</div>
										</div>
									</form>
								</div>
							</div> --}}
						</div>
					</div>
					{{-- <div class="col-xl-4">
						<aside class="sidebar">
							<!--Search-->
							<div class="sidebar-widget search">
								<form>
									<input type="text" placeholder="Search">
									<button class="sub-btn"><i class="fas fa-search"></i></button>
								</form>
							</div>
							<!--Course-->
							<div class="course-left-box crs-post">
								<h5 class="course-left-title">More course for you</h5>
								<div class="course-post">
									<div class="course-post-wrp">
										<img src="assets/img/singlepost/post-2.png" alt="thumb">
										<div class="course-post-text">
											<h6>Complete education learning course 2020</h6>
											<span>$90.00</span>
										</div>
									</div>
									<div class="course-post-wrp">
										<img src="assets/img/singlepost/post-2.png" alt="thumb">
										<div class="course-post-text">
											<h6>Complete education learning course 2020</h6>
											<span>$90.00</span>
										</div>
									</div>
									<div class="course-post-wrp">
										<img src="assets/img/singlepost/post-2.png" alt="thumb">
										<div class="course-post-text">
											<h6>Complete education learning course 2020</h6>
											<span>$90.00</span>
										</div>
									</div>
								</div>
							</div>
							<!--Recent Post-->
							<div class="sidebar-widget recent-post">
								<h4 class="widget-title">Recent Posts</h4>
								<div class="recent-post-content">
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="assets/img/singlepost/post-1.png" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>Ye on properly handsome returned throwing am</h5>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="assets/img/singlepost/post-2.png" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>without wishing he of picture no exposed talking</h5>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="assets/img/singlepost/post-3.png" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>Offered say visited elderly and. Waited period are</h5>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="assets/img/singlepost/post-4.png" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>Herself too improve winding ask expense Spending</h5>
										</div>
									</div>
								</div>
							</div>
							<!--Categories-->
							<div class="sidebar-widget cate">
								<h4 class="widget-title">Categories</h4>
								<ul>
									<li><a href="#"><i class="fas fa-tags"></i>Success Stories</a></li>
									<li><a href="#"><i class="fas fa-tags"></i>Gym Personal Trainer</a></li>
									<li><a href="#"><i class="fas fa-tags"></i>Workout</a></li>
									<li><a href="#"><i class="fas fa-tags"></i>Excercies</a></li>
									<li><a href="#"><i class="fas fa-tags"></i>Healthy Living</a></li>
									<li><a href="#"><i class="fas fa-tags"></i>Nutrition & Weight Loss</a></li>
								</ul>
							</div>
							<!--Tags-->
							<div class="sidebar-widget Tags">
								<h4 class="widget-title">Tags</h4>
								<ul>
									<li><a href="#">Graphic Design</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">HTML</a></li>
									<li><a href="#">Graphic Design</a></li>
									<li><a href="#">Graphic Design</a></li>
									<li><a href="#">Web Design</a></li>
								</ul>
							</div>
						</aside>
					</div> --}}
				</div>
			</div>
		</div>
		<!-- End  Blog-Content -->
		
	</main>	
	
	
	<div class="clearfix"></div>
    
	@endsection
@section('per_page_script')


@endsection
