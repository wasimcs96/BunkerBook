@extends('frontEnd.layout.master')
@section('title','Consultant')
@section('content')
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<!-- Start header
    ============================================= -->
@include('frontEnd.layout.headerindex')


<!-- Start Breadcrumb
		============================================= -->
		<div class="site-breadcrumb" style="background-image: url('{{asset('frontEnd/assets/img/team/unnamedq.jpg')}}');">
			<div class="">
				<!-- <img src="assets/img/header/header-shape-2.png" class="hero-circle-1" alt="thumb"> -->
			</div>
			<div class="container">
			<h2 class="breadcrumb-title" >About Us</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="#">Home</a></li>
					<li class="active">About</li>
				</ul>
			</div>
		</div>
		<!-- End  Breadcrumb -->

        <div class="about-area de-padding posi-rel" data-background="{{asset('frontEnd/assets/img/about/about-bg.png')}}" >
    <div class="container">
        <div class="about-wrapper">
            <div class="about-left">
                <span class="hero-p1">WELCOME TO Bunkerbook</span>
                <h2>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, adipisci!
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, delectus possimus! Atque doloribus alias quaerat dolor a at sint necessitatibus qui quo, neque harum omnis exercitationem vel perferendis. Nihil, nobis.
                </p>
                <div class="about-opt grid-2">
                    <div class="about-opt-box">
                        <!-- <img src="{{ asset('frontEnd/assets/img/about/about-icon.png') }}" alt="thumb"> -->
                        <h5>24/7 Support Online-Offline</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, dolore. Ipsa ipsum dolore ex illum ab minus voluptas vitae deserunt?
                        </p>
                    </div>
                    <div class="about-opt-box">
                        <!-- <img src="{{ asset('frontEnd/assets/img/about/about-icon-2.png') }}" alt="thumb"> -->
                        <h5>Well Consulting System</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, veniam?
                        </p>
                    </div>
                </div>
            </div>
            <!--about-right-pic-2-->
            <div class="about-right">
                <div class="about-right-pic">
                    <img src="{{ asset('frontEnd/assets/img/team/unnamed.jpg') }}"  alt="thumb">
                    <div class="about-ply-btn">
                        <a href="#" class="video-play-btn"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="counter-area de-padding" data-background="{{asset('frontEnd/assets/img/team/ship.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div data-text="Our History" class="site-title wh text-center">
                    <!-- <img src="{{ asset('frontEnd/assets/img/heading/choose.png') }}" alt="thumb"> -->
                    <span class="sub-head">History since 1990</span>
                    <h2>We have over 20 years experience!</h2>
                </div>
            </div>
        </div>
        <div class="counter-wrapper grid-4">
            <div class="fun-fact">
                <img src="{{ asset('frontEnd/assets/img/counter/1.png') }}" alt="thumb">
                <div class="fun-desc">
                    <p class="timer" data-to="560" data-speed="3000">560</p>
                    <span class="medium">Successfully Project</span>
                </div>
            </div>
            <div class="fun-fact fun-active">
                <img src="{{ asset('frontEnd/assets/img/counter/2.png') }}" alt="thumb">
                <div class="fun-desc">
                    <p class="timer" data-to="560" data-speed="3000">560</p>
                    <span class="medium">Happy Clients</span>
                </div>
            </div>
            <div class="fun-fact">
                <img src="{{ asset('frontEnd/assets/img/counter/3.png') }}" alt="thumb">
                <div class="fun-desc">
                    <p class="timer" data-to="850" data-speed="3000">850</p>
                    <span class="medium">Awards Wins</span>
                </div>
            </div>
            <div class="fun-fact">
                <img src="{{ asset('frontEnd/assets/img/counter/4.png') }}" alt="thumb">
                <div class="fun-desc">
                    <p class="timer" data-to="502" data-speed="3000">502</p>
                    <span class="medium">Cup Of Tea</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('per_page_style')
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
@endsection
@section('per_page_script')

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
@endsection