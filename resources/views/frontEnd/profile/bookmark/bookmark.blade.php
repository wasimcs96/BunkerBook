@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
@include('frontEnd.layout.headerindex')


@section('content')
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

                            @foreach($books as $book)
                            <div class="pf-item video photography">
                                <div class="course-box">
                                    <div class="course-pic">
                                        <img src="{{asset('frontEnd/assets/img/course/course-1.jpg')}}"
                                            class="course-img" alt="thumb">
                                        <div class="course-pic-content">
                                            <div class="course-rating">
                                                <!-- <i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i> -->
                                                <span><i class="fa fa-heart" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="course-author-time">
                                                <div class="course-author-pic">
                                                    <img src="assets/img/course/user-1.jpg" alt="thumb">
                                                    <h6>{{$book->business->name ?? ''}}</h6>
                                                </div>
                                                <div class="course-time">
                                                    <!-- <i class="fas fa-book-open"></i>  -->
                                                    <!-- <span>3:56:59</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-tags">
                                            <div class="course-rating">Rating : 
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <!-- <div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div> -->
                                        </div>
                                        <div class="course-text">
                                            <a href="course-details.html">
                                                <h5>{{$book->business->name ?? ''}}</h5>
                                            </a>
                                            <div class="course-tags-link">
                                                <a href="#">Country : {{$book->business->country ?? ''}}</a>
                                                <!-- <a href="#">Data</a> -->
                                            </div>
                                            <a href="course-details.html">
                                                <p> {{$book->business->about ?? ''}}</p>
                                            </a>
                                            <!-- <p class="my-4">
														Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore 
													</p> -->
                                        </div>
                                        <div class="course-bottom">
                                            <a href="{{route('business.detail',$book->business->id)}}"
                                                class="course-btn">See Details <i class="ti ti-arrow-right"></i></a>
                                            <!-- <span>$15.00</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
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