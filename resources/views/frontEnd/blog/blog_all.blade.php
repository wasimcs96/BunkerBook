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
		<div class="site-breadcrumb" style="background: url(frontEnd/assets/img/breadcrumb/breadcrumb.jpg)">
			<div class="breadcrumb-circle">
				<img src="{{asset('frontEnd/assets/img/header/header-shape-2.png')}}" class="hero-circle-1" alt="thumb">
			</div>
			<div class="container">
			<h2 class="breadcrumb-title">Newsfeed</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="index.html">Home</a></li>
					<li class="active">Newsfeed</li>
				</ul>
			</div>
		</div>
		<!-- End  Breadcrumb -->
		
		<!-- Start Blog-Content
		============================================= -->
		<div class="single-area de-padding clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="single-blog">
							<div class="single-content">
								<div class="single-page-meta-content">
									<ul>
										<li>
											<div class="single-meta-box single-admin-meta">
												<img src="{{asset('frontEnd/assets/img/singlepost/40.png')}}" alt="thumb">
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
									<img src="{{asset('frontEnd/assets/img/singlepost/single.jpg')}}" alt="thumb">
								</div>
								<a href="single.html"><h2 class="single-content-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, rem.</h2></a>
								<div class="single-content-text">
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodot consequa. Duis aute irures dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatuo Excepteur sint occcat cupidatat nonm proident, sunt in culpa qui officia deserunt 
									</p>
								</div>
								<div class="blog-single-btn">
									<a href="single.html" class="theme-btn">Read More</a>
								</div>
							</div>
						
						</div>
						<div class="pagination-wrapper">
							<div class="pagination">
								<a class="prev page-numbers" href="javascript:;">prev</a>
								<span aria-current="page" class="page-numbers current">1</span>
								<a class="page-numbers" href="javascript:;">2</a>
								<a class="page-numbers" href="javascript:;">3</a>
								<a class="page-numbers" href="javascript:;">4</a>
								<a class="page-numbers" href="javascript:;">5</a>
								<a class="next page-numbers" href="javascript:;">next</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<aside class="sidebar">
							<!--Search-->
							<div class="sidebar-widget search">
								<form>
									<input type="text" placeholder="Search">
									<button class="sub-btn"><i class="fas fa-search"></i></button>
								</form>
							</div>
							<!--Recent Post-->
							<div class="sidebar-widget recent-post">
								<h4 class="widget-title">Recent News</h4>
								<div class="recent-post-content">
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="{{asset('frontEnd/assets/img/singlepost/post-1.png')}}" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>Ye on properly handsome</h5>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="{{asset('frontEnd/assets/img/singlepost/post-2.png')}}" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>without wishing he of </h5>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="{{asset('frontEnd/assets/img/singlepost/post-3.png')}}" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>Offered say visited elderly </h5>
										</div>
									</div>
									<div class="recent-post-single">
										<div class="recent-post-img">
											<img src="{{asset('frontEnd/assets/img/singlepost/post-4.png')}}" alt="thumb">
										</div>
										<div class="recent-post-info">
											<span>jan 06 2020</span>
											<h5>Lorem ipsum dolor sit amet. </h5>
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
					</div>
				</div>
			</div>
		</div>
		<!-- End  Blog-Content -->
		
	</main>	
	
	<div class="clearfix"></div>
    
	@endsection
@section('per_page_script')


@endsection