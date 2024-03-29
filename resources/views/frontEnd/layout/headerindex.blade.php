

<div class="header-top">
    <div class="header-1">
        <div class="container">
            <div class="header-1-wrap hdr-3">
                <div class="header-1-dropdown">
                    <!-- <div class="header-btn">
									<i class="fas fa-map-marker-alt"></i>
									<span>04 Tuesday 2020, New York USA </span>
								</div>
								<div class="headerslogan">
									<i class="flaticon-call"></i>
									<span>Call Us: +197 365 587</span>
								</div> -->
                </div>
                <div class="header-social-loc">
                    <!-- <div class="header-scl">
                        <span>We're active on</span>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div> -->
                    <div class="header-loc">
                        <ul class="d-flex align-items-center">
                            @if(auth()->user())
                            <li><a href="{{route('logout')}}"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
                            @else
                            <li><a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i>Login</a></li>
                            <li><a href="{{route('register')}}"><i class="fas fa-sign-in-alt"></i>Register</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent bsnav-scrollspy sticked in"
    style="position: relative;">
    <div class="container">
        <a class="navbar-brand" href="{{route('front')}}">
            <img src="{{asset('frontEnd\assets\img\header\processed.png')}}" alt="logo" style="width: 120px;">
            <!-- <h1>Logo</h1> -->
        </a>
        <button class="navbar-toggler" onclick="openNav()"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-sm-end">
            <ul class="navbar-nav navbar-mobile ml-auto">
                <li class="nav-item">
                    @if(auth()->user() && auth()->user()->isAdmin())
                    <a class="nav-link" href="{{route('admin.panel')}}">Dashboard </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front')}}">Home </a>
                    <!-- <i class="caret ti-plus"></i> -->
                    <!-- <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home varsion 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-2.html">Home varsion 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-3.html">Home varsion 3</a></li>
                                </ul> -->
                </li>
                <!-- <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Pages <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="advisor.html">Advisor</a></li>
                                    <li class="nav-item"><a class="nav-link" href="author-details.html">Advisor Single</a></li>

                                    <li class="nav-item"><a class="nav-link" href="event.html">Event</a></li>
                                    <li class="nav-item"><a class="nav-link" href="event-details.html">Event Single</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">404 Page</a></li>
                                </ul>
                            </li> -->
                            {{-- <li class="nav-item"><a class="nav-link" href="{{route('country.bussiness')}}">Country</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('category.view')}}">Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('feedback.index')}}">Feedback</a></li> --}}
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Courses <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="course.html">Courses</a></li>
                                    <li class="nav-item"><a class="nav-link" href="course-details.html">Courses Details</a></li>
                                </ul>
                            </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('newsfeed.view')}}">Newsfeed </a>
                    </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('event.front.index')}}">Event </a>
                </li> --}}
                <li class="nav-item"><a class="nav-link" href="{{route('about_us')}}">About Us</a></li>
                <!-- <i class="caret ti-plus"></i> -->
                <!-- <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-standard.html">Blog Standard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-grid.html">Blog Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single.html">Blog Details</a></li>
                                </ul> -->
               
                <!-- <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Shop <i class="caret ti-plus"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shop-details.html">Shop Single</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Shop Cart</a></li>
                                </ul>
                            </li> -->
                <!-- <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li> -->
                @if(auth()->user())
                          <li class="nav-item"><a class="nav-link" href="{{route('country.bussiness')}}">Country</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('category.view')}}">Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('feedback.index')}}">Feedback</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="{{route('document.index')}}">Documents</a></li> --}}
                             <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('event.front.index')}}">Event </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Documents</a>
                    <ul class="navbar-nav">
                        <?php  $files= App\Models\Pdfdocs::orderBy('created_at','DESC')->get();?>
                        @if(isset($files)&&$files->count() > 0)
                        @foreach($files as $key=>$file)
                        <li class="nav-item"><a class="nav-link" href="{{asset($file->file ?? '')}}" target="_blank">{{$file->file_name ?? 'N/A'}}</a></li>
                       @endforeach
                       @else
                       <li class="nav-item"><a class="nav-link" >Currently Unavailable</a></li>
                       @endif

                    </ul>
                </li>
                @if(!auth()->user()->isAdmin())
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Profile</a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('user.detail')}}">Account info</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="/frontend/membership">Membership</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('bookmark.index')}}">Bookmark</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('front.business.create')}}">Add Business</a></li>

                    </ul>
                </li>
                @endif
                @endif
            </ul>
            <!-- <div class="header-serarch-btn ab un-srs">
                <input type="checkbox" class="frm" id="frm">
                <label for="frm"><i class="ti ti-search"></i></label>
                <form class="header-form">
                    <input type="text" placeholder="search ...">
                    <button type="button" class="srs-btn"><i class="ti ti-search"></i></button>
                </form>
            </div> -->
        </div>
    </div>
</div>

@include('includes.alert')