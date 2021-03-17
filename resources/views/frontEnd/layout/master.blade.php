<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Bunkerbook </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontEnd/assets/img/logo/favicon.png') }}">
	<!-- ========== Start Stylesheet ========== -->
	<link href="{{ asset('frontEnd/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/fontawesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/magnific-popup.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/animate.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/bsnav.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/flaticon-set.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/site-animation.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/slick.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/themify-icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/swiper.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontEnd/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/css/responsive.css') }}" rel="stylesheet" />
    @yield('per_page_style')
	<!-- ========== End Stylesheet ========== -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5/html5shiv.min.js"></script>
	  <script src="assets/js/html5/respond.min.js"></script>
	<![endif]-->

</head>
<body class="demo-1" id="bdy">
    <div class="se-pre-con">



    </div>
    <div class="clearfix"></div>

	<main class="main" id="contentpre" class="prehidden">
       
        @yield('content')

    </main>
    
<div class="clearfix"></div>
<!--  data-background=" {{ asset('frontEnd/assets/img/footer/ftr-2-bg.jpg')}}" -->
<footer class="footer-2 footer-shape">
    <div class="">
        <!-- <img src="{{ asset('frontEnd/assets/img/header/header-shape-2.png') }}" class="hero-circle-1" alt="thumb"> -->
    </div>
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wrapper grid-4 de-padding">
                <div class="footer-widget-box ab-us">
                    <h4 class="foo-widget-title">About Us</h4>
                    <p>
                        Consequuntur posuere sint blandit, suscipit nascetur sociis wisi quam repellendus! perspiciatis  iste tempore rutrum.
                    </p>
                    <!-- <div class="footer-hours">
                        <ul>
                            <li><i class="fas fa-clock"></i> Opening Hours</li>
                            <li><span>9 am - 5pm</span></li>
                        </ul>
                    </div> -->
                </div>
                <div class="footer-widget-box footer-sub">
                    <h4 class="foo-widget-title">Subscribe</h4>
                    <p>
                        Lorem ipsum dolor sit  consectetur adipisicing elit, sed eiusmotempor incididunt ut labore et
                    </p>
                    <!-- <div class="subscribe">
                        <form>
                            <input type="text" placeholder="Type Your Email">
                            <button type="submit"><i class="fas fa-location-arrow"></i></button>
                        </form>
                    </div> -->
                </div>
                <!-- <div class="footer-widget-box footer-cat">
                    <h4 class="foo-widget-title">Popular Categories</h4>
                    <ul class="foo-list">
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Programming language</a></li>
                        <li><a href="#">History learning online</a></li>
                        <li><a href="#">Shop Page</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div> -->
                <div class="footer-widget-box footer-link">
                    <h4 class="foo-widget-title">Useful links</h4>
                    <ul class="foo-list">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <!-- <li><a href="#">Release Status</a></li>
                        <li><a href="#">WordPress</a></li>
                        <li><a href="#">Feedback</a></li> -->
                    </ul>
                </div>
                <div class="footer-widget-box footer-link">
                    <h4 class="foo-widget-title">Newsfeed</h4>
     
                    <div class="footer-gallery grid-3">
                        <img src="{{ asset('frontEnd/assets/img/team/ship.jpg') }}" alt="thumb">
                        <img src="{{ asset('frontEnd/assets/img/team/ship.jpg') }}" alt="thumb">
                        <img src="{{ asset('frontEnd/assets/img/team/ship.jpg') }}" alt="thumb">
                        <img src="{{ asset('frontEnd/assets/img/team/ship.jpg') }}" alt="thumb">
                        <img src="{{ asset('frontEnd/assets/img/team/ship.jpg') }}" alt="thumb">
                        <img src="{{ asset('frontEnd/assets/img/team/ship.jpg') }}" alt="thumb">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright © 2021. All Rights Reserved By BunkerBook.</p>
                <!-- <ul class="footer-social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul> -->
            </div>
        </div>
    </div>
</footer>
<!-- End Footer-->


<!-- Start Scroll top
============================================= -->
<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
<!-- End Scroll top-->


  <!-- jQuery Frameworks
============================================= -->

<script src="{{ asset('frontEnd/assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/jquery.appear.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/html5/html5shiv.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/html5/respond.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/progress-bar.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/modernizr.custom.13711.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/count-to.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/fontawesome.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/swiper.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/text.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/YTPlayer.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/slick.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/bsnav.min.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/jquery.easypiechart.js')}}"></script>
<script src="{{ asset('frontEnd/assets/js/main.js')}}"></script>
@yield('per_page_script')
<script>
    $(function () {
        $('#registerForm').submit(function (e) {
            e.preventDefault();
            let formData = $(this).serializeArray();
            $(".invalid-feedback").children("strong").text("");
            $("#registerForm input").removeClass("is-invalid");
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ route('register') }}",
                data: formData,
                success: () => window.location.assign("{{ route('frontend.index') }}"),
                error: (response) => {
                    if(response.status == 422) {
                        let errors = response.responseJSON.errors;
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Input").addClass("is-invalid");
                            $("#" + key + "Error").children("strong").text(errors[key][0]);
                        });
                    } else {
                        // window.location.reload();
                    }
                }
            })
        });
    })
</script>
</body>



</html>
