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
    <div class="site-breadcrumb" style="background: url({{asset('frontEnd/assets/img/breadcrumb/breadcrumb.jpg')}})">
        <div class="breadcrumb-circle">
            <img src="{{asset('frontEnd/assets/img/header/header-shape-2.png')}}" class="hero-circle-1" alt="thumb">
        </div>
        <div class="container">
            <h2 class="breadcrumb-title">{{$business->name ?? ''}} Details</h2>
            <ul class="breadcrumb-menu clearfix">
                {{-- <li><a href="{{'home'}}">Home</a></li> --}}
                {{-- <li class="active">course</li> --}}
            </ul>
        </div>
    </div>
    <!-- End  Breadcrumb -->

    <!-- Start Course Info
		============================================= -->
    <div class="course-info de-padding">
        <div class="container">
            {{-- <div class="course-info-wrapper"> --}}
            {{-- <div class="course-left-sidebar">
						<div class="course-left-box category">
							<a href="#">Computer science</a>
							<a href="#">Artificial intelligence</a>
							<a href="#">Architecture</a>
							<a href="#">Health & Fitness</a>
							<a href="#">Analysis of Algorithms</a>
						</div>
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
					</div> --}}
            <div class="course-right-content col-lg-12">
                <div class="course-syl-header">
                    <h2 class="course-syl-title">
                        {{$business->name ?? ''}}
                    </h2>
                    <div class="course-syl-author cr-mb">
                        <ul>
                            {{-- <li>
										<div class="course-syl-author-wrp d-bio">
											<img src="assets/img/singlepost/post-3.png" alt="thumb">
											<div class="course-syl-bio">
												<p>Author: </p>
												<span>MD. Malino Masker</span>
											</div>
										</div>
									</li> --}}
                            <li>
                                <div class="course-syl-author-wrp d-bio">
                                    <div class="course-syl-bio">
                                        <p>Country: </p>
                                        <span>
                                            {{$business->country ?? ''}}
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="course-syl-author-wrp d-bio">
                                    <div class="course-syl-bio">
                                        <p>City: </p>
                                        <div class="course-syl-rating">

                                            <span>@if(isset($business->city)) {{$business->city ?? ''}} @else N/A
                                                @endif</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="course-syl-price cr-mb">
                        <ul>
                            {{-- <li><p><i class="fas fa-user"></i>Enrolled students 564</p></li> --}}
                            {{-- <li><p><i class="fas fa-user"></i>Enrolled students 564</p></li> --}}
                            {{-- <li><p class="value"> <b>Price:</b>$180.00</p></li> --}}
                            {{-- <li><a href="#" class="theme-btn">Enroll Now </a></li> --}}
                        </ul>
                    </div>
                    {{-- <div class="course-course-pic cr-mb">
								<img src="{{asset('frontEnd/assets/img/details-page/imagesss.jpg')}}" alt="thumb">
                </div> --}}
            </div>
            <div class="course-syl-bottom">
                <div class="course-syl-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">
                                Personal Information
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">
                                Ports Of Operation
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">
                                Review
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="course-syl-con">
                                <div class="course-syl-con-bottom">
							{{ $business->about ?? '' }}
                                    <!-- <ul class="course-li-1">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteur cillum hic cum labore cenas. Invent
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteur cillum hic cum labore cenas. Invent
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteur cillum hic cum labore cenas. Invent
                                            </span>
                                        </li>
                                    </ul> -->
                                    <!-- <div class="course-syl-imgs mt-40 grid-2">
                                        <img src="assets/img/details-page/img-1.jpg" alt="thumb">
                                        <img src="assets/img/details-page/img-2.jpg" alt="thumb">
                                    </div> -->
                                    <!-- <div class="course-syl-text mt-40">
                                        <p>
                                            Perferendis lacinia non, est distinctio ut eveniet, posuere mus nostrum eget
                                            itaque, irure illo leo. Est! Numquam autem ipsa! Dolores eiusmod, impedit
                                            bibendum porro! Error! Magna quia. Quia officia non? Lectus corporis
                                            laudantium cursus voluptas eveniet
                                        </p>
                                        <p class="mb-0">
                                            Perferendis, voluptatum. Exercitation justo aliquip? Convallis ligula aptent
                                            aute ab? Sit necessitatibus error, quaerat curae tristique tempore velit,
                                            nascetur ullam metus molestie, etiam sapien cupiditate magni do ut,
                                            consequuntur doloribus ea fusce recusandae eros, minim dolore magnis
                                        </p>
                                    </div> -->
                                    <!-- <ul class="course-li-1 li-2 mt-30 mb-30">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteu
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteu
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteu
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteu
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteu
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Fugiat suspendisse maxime excepteu
                                            </span>
                                        </li>
                                    </ul> -->
                                    <!-- <p class="mb-0">
                                        Perferendis lacinia non, est distinctio ut eveniet, posuere mus nostrum eget
                                        itaque, irure illo leo. Est! Numquam autem ipsa! Dolores eiusmod, impedit
                                        bibendum porro! Error! Magna quia. Quia officia non? Lectus corporis laudantium
                                        cursus voluptas eveniet
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="course-accordion">
                                <div class="course-accordion-header mb-30">
                                    <!-- <h2 class="course-content-title">Course Tutorials</h2> -->
                                    <!-- <p class="mb-0">
                                        lacing assured be if removed it besides on. Far shed each high read are men over
                                        day. Afraid we praise lively he suffer family estate is. Ample order up in of in
                                        ready. Timed blind had now those ought set often which. Or snug dull he show
                                        more true wish. No at many deny away miss evil. On in so indeed spirit an
                                        mother. Amounted old strictly but marianne admitted. People former is remove
                                        remain as.
                                    </p> -->
                                </div>
                                <div class="ask">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default panel-active">
                                            <!-- <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne" class="collapsed">
                                                        Sunday({{$business->sunday}})
                                                    </a>
                                                </h4>
                                            </div> -->
                                            <!-- <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel"
                                                aria-labelledby="headingOne" style="">
                                                <div class="panel-body">
                                                    <ul class="course-video-list">
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Start Time</span>
                                                                    </div>
                                                                    {{-- <h5>Start Time</h5> --}}
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>{{$business->sunday_start_time}}</span>
                                                                        {{-- <a href="#">Preview</a> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>End Time</span>
                                                                    </div>
                                                                    {{-- <h5>End Time</h5> --}}
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>{{$business->sunday_end_time}}</span>
                                                                        {{-- <a href="#">Preview</a> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="panel panel-default panel-active">
                                            <div class="panel-heading" role="tab" id="headingmonday">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne" class="collapsed">
                                                        Sunday({{$business->sunday}})
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel"
                                                aria-labelledby="headingOne" style="">
                                                <div class="panel-body">
                                                    <ul class="course-video-list">
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Start Time</span>
                                                                    </div>
                                                                    {{-- <h5>Start Time</h5> --}}
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>{{$business->sunday_start_time}}</span>
                                                                        {{-- <a href="#">Preview</a> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>End Time</span>
                                                                    </div>
                                                                    {{-- <h5>End Time</h5> --}}
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>{{$business->sunday_end_time}}</span>
                                                                        {{-- <a href="#">Preview</a> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading3">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse3" aria-expanded="false"
                                                        aria-controls="collapse3" class="collapsed">
                                                        Beginning the first Project
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse in collapse" role="tabpanel"
                                                aria-labelledby="heading3" style="">
                                                <div class="panel-body">
                                                    <ul class="course-video-list">
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <h5>Overview Of Course</h5>
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>Duration: 5 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <h5>Basic Enviroment Setup</h5>
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>Duration: 1 hours 30 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading4">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse4" aria-expanded="false"
                                                        aria-controls="collapse4" class="collapsed">
                                                        Initial Setup of Second Project
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse4" class="panel-collapse in collapse" role="tabpanel"
                                                aria-labelledby="heading4" style="">
                                                <div class="panel-body">
                                                    <ul class="course-video-list">
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <h5>Overview Of Course</h5>
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>Duration: 5 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-video-wrp">
                                                                <div class="course-item-name">
                                                                    <div>
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <h5>Basic Enviroment Setup</h5>
                                                                </div>
                                                                <div class="course-time-preview">
                                                                    <div class="course-item-info">
                                                                        <span>Duration: 1 hours 30 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                            <div class="single-comments-section-form">
                                <h2 class="single-content-title">Leave a Review</h2>
                                <form action="{{ route('business.rating',$business->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="rating" style="font-size: 16px;margin: 17px;">Add
                                                Ratings</label>
                                            <div class="rat">

                                                {{-- <label for="rating">Add Rating</label> --}}

                                                <label>
                                                    <input type="radio" name="rating" value="1" checked />
                                                    <span class="icn">★</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="rating" value="2" />
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="rating" value="3" />
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="rating" value="4" />
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                </label>
                                                <label>
                                                    <input type="radio" name="rating" value="5" />
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                    <span class="icn">★</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12 my-5">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" name="coment"
                                                placeholder="Your Comment*"></textarea>
                                        </div>
                                        <button type="submit">
                                            Submit
                                        </button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- </div> --}}
    </div>
    </div>
    <!-- End  Course Info -->

</main>

<div class="clearfix"></div>

@endsection

@section('per_page_style')
<style>
.rat {
    display: inline-block;
    position: relative;
    height: 50px;
    line-height: 50px;
    font-size: 50px;
}

.rat label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    cursor: pointer;
}

.rat label:last-child {
    position: static;
}

.rat label:nth-child(1) {
    z-index: 5;
}

.rat label:nth-child(2) {
    z-index: 4;
}

.rat label:nth-child(3) {
    z-index: 3;
}

.rat label:nth-child(4) {
    z-index: 2;
}

.rat label:nth-child(5) {
    z-index: 1;
}

.rat label input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
}

.rat label .icn {
    float: left;
    color: transparent;
}

.rat label:last-child .icn {
    color: rgb(241, 231, 231);
}

.rat:not(:hover) label input:checked~.icn,
.rat:hover label:hover input~.icn {
    color: rgb(240, 243, 39);
}

.rat label input:focus:not(:checked)~.icn:last-child {
    color: rgb(247, 240, 240);
    text-shadow: 0 0 5px #09f;
}
</style>
@endsection
@section('per_page_script')
<script>
$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
});
</script>
@endsection