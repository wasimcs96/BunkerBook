@extends('frontEnd.layout.master')
@section('title', 'University')

@section('per_page_style')
<link rel="stylesheet" href="{{ asset('assets/vendor/light-gallery/css/lightgallery.css') }}">
<style>
    .universitylogo{
        border-radius: 50%;
    border: 6px solid #eee;
    padding: 0.3rem;
    width: 150px;
    }
</style>
@endsection

@section('content')
<!-- Start header
============================================= -->
@include('frontEnd.layout.header')
<!-- End header -->

<div class="clearfix"></div>

<main class="main">

    <!-- Start Breadcrumb
    ============================================= style="background: url(assets/img/breadcrumb/breadcrumb.jpg)"-->
    <div class="site-breadcrumb" data-background="{{asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
        <div class="breadcrumb-circle">
            <img src="{{ asset('frontEnd/assets/img/header/header-shape-2.png')}}">
        </div>
        <div class="container">
            <div class="row">
           <img class="universitylogo" src="{{asset('frontEnd/assets/img/partner/img-2.jpg')}}" > <h5 class="breadcrumb-title">RAJASTHAN TECHNICAL UNIVERSITY - [RTU], KOTA</h5>
            </div>
                <ul class="breadcrumb-menu clearfix">
                    <li><a href="index.html"> ESTD 2006 </a></li>
                    <li class="active">KOTA, RAJASTHAN</li>
                </ul>
            </div>

    </div>
    <!-- End  Breadcrumb -->

    <!-- Start Author Bio
    ============================================= -->
    <div class="author-info posi-rel de-padding">
        <div class="author-shape">
            <img src="{{ asset('frontEnd/assets/img/details-page/author-bg.png') }}" alt="thumb">
        </div>
        <div class="container">
            <div class="author-bio-wrapper grid-3">
                <div class="auhtor-pic">
                    <img src="{{ asset('frontEnd/assets/img/partner/img-2.jpg')}}" alt="thumb">
                </div>
                <div class="auhtor-con">
                    <h5>RAJASTHAN TECHNICAL UNIVERSITY</h5>
                    <h6>Established | Institute Type	:   2006 | State</h6>
                    <ul class="author-list">
                        <li>Approved by : AICTE</li>
                        <li>Recognized by	UGC</li>
                        <li>Popular Courses :	BE/B.Tech, M.Tech/ MBA</li>
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
                    <h5>About university:</h5>
                    <p>
                        Rajasthan Technical University is located in Kota in the state of Rajasthan. It was established in 2006 by the Government of Rajasthan which currently affiliates about 68 Engineering Colleges, 03 B.Arch, 16 MCA Colleges, 39 MBA Colleges, 31 M.Tech Colleges, 01 M.Arch and 01 Hotel Management and Catering Institute.


                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Author Bio -->

    <!-- Start Course
    ============================================= -->
    <div id="portfolio" class="portfolio-area course-2 de-pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <div class="site-title-left">
                        <h2>Our Popular courses</h2>
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
                                            <div class="course-2-pic-content">
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-1.jpg')}}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Computer Science</h5></a>
                                                <p>
                                                    Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore
                                                </p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item barch">
                                    <div class="course-2-box">
                                        <div class="course-2-pic">
                                            <img src="{{ asset('frontEnd/assets/img/course/course-2.jpg')}}" class="course-img" alt="thumb">
                                            <div class="course-2-pic-content">
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-2.jpg') }}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Architecture</h5></a>
                                                <p>
                                                    Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore
                                                </p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
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
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-3.jpg')}}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Hotel Management</h5></a>
                                                <p>
                                                    Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore
                                                </p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ********************************** --}}
                                <div class="pf-item mtech">
                                    <div class="course-2-box">
                                        <div class="course-2-pic">
                                            <img src="{{ asset('frontEnd/assets/img/course/course-1.jpg')}}" class="course-img" alt="thumb">
                                            <div class="course-2-pic-content">
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-1.jpg')}}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Control & Instrumentation</h5></a>
                                                <p>
                                                    Conubia egestas eos laboris netus velit mi aliquid aute euismod, integer? Quo class taciti labore
                                                </p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ***************************************** --}}
                                <div class="pf-item march">
                                    <div class="course-2-box">
                                        <div class="course-2-pic">
                                            <img src="{{ asset('frontEnd/assets/img/course/course-2.jpg')}}" class="course-img" alt="thumb">
                                            <div class="course-2-pic-content">
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-2.jpg')}}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Urban Design</h5></a>
                                                <p>
                                                    10+2 with 50% marks and Mathematics as a main subject/ Diploma in any subject from a State													</p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="pf-item phd">
                                    <div class="course-2-box">
                                        <div class="course-2-pic">
                                            <img src="{{ asset('frontEnd/assets/img/course/course-2.jpg')}}" class="course-img" alt="thumb">
                                            <div class="course-2-pic-content">
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-2.jpg')}}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Engineering</h5></a>
                                                <p>
                                                    10+2 with 50% marks and Mathematics as a main subject/ Diploma in any subject from a State 													</p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ********************************** --}}
                                <div class="pf-item mba">
                                    <div class="course-2-box">
                                        <div class="course-2-pic">
                                            <img src="{{ asset('frontEnd/assets/img/course/course-3.jpg')}}" class="course-img" alt="thumb">
                                            <div class="course-2-pic-content">
                                                <p><span>356</span> Enrolled</p>
                                            </div>
                                        </div>
                                        <div class="course-2-content">
                                            <div class="course-author">
                                                <img src="{{ asset('frontEnd/assets/img/course/user-3.jpg') }}" alt="thumb">
                                                <h6>Samrun Whatson</h6>
                                            </div>
                                            <div class="course-2-text">
                                                <a href="course-details.html"><h5>Business Administration</h5></a>
                                                <p>
                                                    Candidates must possess a graduation degree in any stream with an average minimum score of 50% (45% marks for SC/ST).
                                                </p>
                                            </div>
                                            <div class="course-2-bottom">
                                                <div class="course-2-lesson">
                                                    <i class="fas fa-book-open"></i>
                                                    <p class="mb-0">26 lesson</p>
                                                </div>
                                                <div class="course-2-price">
                                                    1st Year Fees:<span>₹37,500 </span>
                                                </div>
                                            </div>
                                            <div class="course-2-btn">
                                                <a href="#" class="theme-btn btn-2">Enroll Now</a>
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
            <a href="#">View All Courses <i class="ti ti-arrow-right"></i></a>
        </div>
    </div>

    <!-- End Course-->

    <!-- Start Registration
    ============================================= -->
    {{-- style="background: url({{ asset('frontEnd/assets/img/animation/reg-bg.jpg)')}}'"  --}}
    <div class="reg-area posi-rel de-padding" data-background="{{asset('frontEnd/assets/img/animation/reg-bg.jpg')}}">

            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div data-text="Our History" class="site-title wh text-center">
                            <img src="{{asset('frontEnd/assets/img/heading/choose.png')}}" alt="thumb">
                            <span class="sub-head">History since 1990</span>
                            <h2>We have over 20 years experience!</h2>
                        </div>
                    </div>
                </div>
                <div class="counter-wrapper grid-4">
                    <div class="fun-fact">
                        <img src="{{asset('frontEnd/assets/img/counter/1.png')}}" alt="thumb">
                        <div class="fun-desc">
                            <p class="timer" data-to="250" data-speed="3000"></p>
                            <span class="medium">Our branch</span>
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
                            <span class="medium">Awards Wins</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <img src="{{asset('frontEnd/assets/img/counter/4.png')}}" alt="thumb">
                        <div class="fun-desc">
                            <p class="timer" data-to="502" data-speed="3000">502</p>
                            <span class="medium">Cup Of Tea</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <hr>

            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="site-title-left">
                        <h2>Gallery</h2>
                    </div>
                </div>

            </div>
            <hr>
            <div class="col-xl-6">
            <h6>
                Images
            </h6>
        </div>
            <!-- End Mixitup Nav-->
            <div id="lightgallery" class="row clearfix lightGallery">
                <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;">
                    <a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}">
                    <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}"  alt=""></a></div>
                <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;">
                    <a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                        <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>
                <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;">
                    <a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                        <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>
                <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;"><a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                    <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>
                    <div class="col-lg-3 col-md-6 m-b-30" style="    margin-top: 13px;"><a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                        <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>

                        <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;"><a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                            <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>

                            <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;"><a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                                <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>

                                <div class="col-lg-3 col-md-6 m-b-30" style="margin-top: 13px;"><a class="light-link" href="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
                                    <img class="img-fluid rounded" src="{{ asset('frontEnd/assets/img/partner/brand-5.jpg')}}" alt=""></a></div>
                        </div>


            <div class="container">
                <hr>
            <div class="col-xl-6">
            <h6>
                Videos
            </h6>
        </div>
            </div>
            <div id="lightgallery" class="row clearfix lightGallery">

            <div class="col-lg-3 col-md-6 m-b-30">
                <a class="light-link" href="https://www.youtube.com/embed/tgbNymZ7vqY" >
                    <iframe class="respo-rame" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe></a></div>

                </div>

        <div class="moree-btn" style="margin-bottom: 21px;">
            <a href="#">Visit Gallery<i class="ti ti-arrow-right"></i></a>
        </div>
    </div>
{{-- <div class="container">
<div class="rowd">

<div class="umn">
  <img src="{{ asset('frontEnd/assets/img/partner/brand-1.jpg') }}" alt="rtu" onclick="myFunction(this);">
</div>
<div class="umn">
  <img src="{{ asset('frontEnd/assets/img/partner/brand-1.jpg') }}" alt="rtu" onclick="myFunction(this);">
</div>
<div class="umn">
  <img src="{{ asset('frontEnd/assets/img/partner/brand-1.jpg') }}" alt="rtu" onclick="myFunction(this);">
</div>
<div class="umn">
  <img src="{{ asset('frontEnd/assets/img/partner/brand-1.jpg') }}" alt="rtu" onclick="myFunction(this);">
</div>
<br>

<div class="more-btn">

    <a href="#" style="color:#FEBC34; ">Visit gallery<i class="ti ti-arrow-right"></i></a>
</div>
</div>
<br>
<hr>
<!-- The expanding image container -->
<div class="ainer">
<!-- Close the image -->
<span onclick="this.parentElement.style.display='none'" class="sebtn">&times;</span>

<!-- Expanded image -->
<img id="exI" style="width:100%">

<!-- Image text -->
<div id="imgt"></div>
</div>
</div> --}}
    {{-- style="background: url(assets/img/review/review-bg.jpg)" --}}
    <div class="review-area de-padding"  data-background="{{asset('frontEnd/assets/img/review/review-bg.jpg')}}" >
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div data-text="Consultant" class="site-title wh text-center">
                        <img src="{{asset('frontEnd/assets/img/heading/choose.png')}}" alt="thumb">
                        <span class="sub-head">Top Ranked Consultant</span>
                        <h2>What say Our Consultant?</h2>
                    </div>
                </div>
            </div>
            <div class="review-wrapper owl-carousel owl-theme">
                <div class="review-box">
                    <div class="review-header">
                        <img src="{{asset('frontEnd/assets/img/review/user-1.png')}}" alt="thumb">
                        <img src="{{asset('frontEnd/assets/img/review/qoute.png')}}" alt="thumb">
                    </div>
                    <div class="review-text">
                        <h5>Sraties Morgan - <span> Manager of DMD</span></h5>
                        <p>
                            Sociis aenean Quaerat nobis! Phasellus elit perferendis occaecato Blandit excepturi, fames diam molestias pellentesque sequi.
                        </p>
                    </div>

                    <div class="review-bottom">
                        <a href="{{route('consultant')}}" class="custom-btn btn-2">Book Now</a>
                        <div class="reviw-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-header">
                        <img src="{{asset('frontEnd/assets/img/review/user-2.png')}}" alt="thumb">
                        <img src="{{asset('frontEnd/assets/img/review/qoute.png')}}" alt="thumb">
                    </div>
                    <div class="review-text">
                        <h5>Sraties Morgan - <span> Manager of DMD</span></h5>
                        <p>
                            Sociis aenean Quaerat nobis! Phasellus elit perferendis occaecato Blandit excepturi, fames diam molestias pellentesque sequi.
                        </p>
                    </div>
                    <div class="review-bottom">
                        <a href="{{route('consultant')}}" class="custom-btn btn-2">Book Now</a>
                        <div class="reviw-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-header">
                        <img src="{{asset('frontEnd/assets/img/review/user-3.png')}}" alt="thumb">
                        <img src="{{asset('frontEnd/assets/img/review/qoute.png')}}" alt="thumb">
                    </div>
                    <div class="review-text">
                        <h5>Sraties Morgan - <span> Manager of DMD</span></h5>
                        <p>
                            Sociis aenean Quaerat nobis! Phasellus elit perferendis occaecato Blandit excepturi, fames diam molestias pellentesque sequi.
                        </p>
                    </div>
                    <div class="review-bottom">
                        <a href="{{route('consultant')}}" class="custom-btn btn-2">Book Now</a>
                        <div class="reviw-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="review-header">
                        <img src="{{asset('frontEnd/assets/img/review/user-2.png')}}" alt="thumb">
                        <img src="{{asset('frontEnd/assets/img/review/qoute.png')}}" alt="thumb">
                    </div>
                    <div class="review-text">
                        <h5>Sraties Morgan - <span> Manager of DMD</span></h5>
                        <p>
                            Sociis aenean Quaerat nobis! Phasellus elit perferendis occaecato Blandit excepturi, fames diam molestias pellentesque sequi.
                        </p>
                    </div>
                    <div class="review-bottom">
                        <a href="{{route('consultant')}}" class="custom-btn btn-2">Book Now</a>
                        <div class="reviw-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration -->

    <!-- Start Partner
    ============================================= -->

    <!-- End Partner-->

    <!-- Start Address
    ============================================= -->
    <div class="addr-area hm-2 de-padding">
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

</main>

<div class="clearfix"></div>

@endsection

@section('per_page_script')

<script src="{{ asset('assets/bundles/lightgallery.bundle.js') }}"></script>

<script src="{{ asset('assets/js/pages/medias/image-gallery.js') }}"></script>

{{-- <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script> --}}
@endsection
