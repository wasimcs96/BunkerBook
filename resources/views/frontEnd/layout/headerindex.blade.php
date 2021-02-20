<header class="header">
    <div class="main-navigation">
        <div class="header-top">
            <div class="header-1">
                <div class="container">
                    <div class="header-1-wrap">
                        <div class="header-1-dropdown">
                            <div class="header-btn">
                                <div class="dropdown">
                                    <button class="cus-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('frontEnd/assets/img/flag/en.png') }}" alt="thumb"> ENG
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><img src="{{ asset('frontEnd/assets/img/flag/jp.png') }}" alt="thumb"> JP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="headerslogan">
                                <span>Welcome to Project</span>
                            </div>
                        </div>
                        <div class="header-social-loc">
                            <div class="header-loc">
                                <i class="ti ti-location-arrow"></i>
                                <span class="loc-txt">04 Tuesday 2020, Rajasthan, India</span>
                            </div>
                            <ul>
                                <li><a href="#"><i class="ti ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti ti-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header-logo">
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="" class="logo-display" alt="Logo"> -->
                        <h1>Logo</h1>
                    </a>
                    <div class="header-logo-1">
                        <ul>
                            <li>
                                <div class="header-logo-box">
                                    <div class="header-icon">
                                        <i class="ti ti-timer"></i>
                                    </div>
                                    <div class="header-logo-box-info">
                                        <h6>Monday - Friday</h6>
                                        <h5>9.00am-5pm</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-logo-box">
                                    <div class="header-icon">
                                        <i class="ti ti-headphone-alt"></i>
                                    </div>
                                    <div class="header-logo-box-info">
                                        <h6>REQUEST A CALL BACK</h6>
                                        <h5>+91-9696336911</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-logo-box">
                                    <div class="header-search un-srs">
                                        <input type="checkbox" class="frm" id="frm">
                                        <label for="frm"><i class="ti ti-search"></i></label>
                                        <form class="header-form">
                                            <input type="text" placeholder="search ...">
                                            <button type="button" class="srs-btn"><i class="ti ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-scrollspy">
            <div class="container">
                <div class="menu-bg">
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-sm-end">
                        <ul class="navbar-nav navbar-mobile mr-auto">
                            {{-- <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> --}}
                             <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Home <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home varsion 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-2.html">Home varsion 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-3.html">Home varsion 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Pages <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="advisor.html">Advisor</a></li>
                                    <li class="nav-item"><a class="nav-link" href="author-details.html">Advisor Single</a></li>

                                    <li class="nav-item"><a class="nav-link" href="event.html">Event</a></li>
                                    <li class="nav-item"><a class="nav-link" href="event-details.html">Event Single</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            @if(Auth()->User())
                            <li class="nav-item"><a class="nav-link" href="/dashboard/index2">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register">Signup</a></li>
                            @endif
                            <!-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> -->
                             <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Courses <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="course.html">Courses</a></li>
                                    <li class="nav-item"><a class="nav-link" href="course-details.html">Courses Details</a></li>
                                </ul>
                            </li>

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Shop <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shop-details.html">Shop Single</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Shop Cart</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item"><a class="nav-link" href="course.html">Courses</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Scholarship & Loan</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">More <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-standard.html">Blog Standard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-grid.html">Blog Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header-serarch-btn">
                        <a href="#" class="header-btn"><span>Enroll course</span><i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bsnav-mobile">
            <div class="bsnav-mobile-overlay"></div>
            <div class="navbar"></div>
        </div>
    </div>
</header>
