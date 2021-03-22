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
    <div class="site-breadcrumb" style="background: url('{{asset($business->featured_banner_image)}}')">
        <div class="">
            <!-- <img src="{{asset('frontEnd/assets/img/header/header-shape-2.png')}}" class="hero-circle-1" alt="thumb"> -->
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
         
            <div class="course-right-content col-lg-12">
                <div class="course-syl-header">
                    <h2 class="course-syl-title">
                        {{$business->name ?? ''}}
                    </h2>
                    <div class="course-syl-author cr-mb">
                        <ul>
                            
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
                            <li>
                                <div class="course-syl-author-wrp d-bio">
                                <div class="card-rating">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                        <?php $rat = App\Models\BusinessRating::where('business_id',$business->id)->average('rating_number');  $rating = round($rat);?>

                                            <p class="col-md-12 p-0 mr-2" style="color:#ffa500; margin-bottom: unset;">Rating:</p>
                                            @if(isset($rating))
                                            <span>@if($rating == 3 ?? '' )
                                            <span class="ratings ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-o"></i>
                                            <i class="fas fa-star-o"></i>
                                            </span>
                                            @elseif($rating == 4 ?? '')
                                            <span class="ratings ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-o"></i>
                                            </span>
                                            @elseif($rating == 5 ?? '')
                                            <span class="ratings ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            </span>
                                            @elseif($rating == 1 ?? '')
                                            <span class="ratings ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-o"></i>
                                            <i class="fas fa-star-o"></i>
                                            <i class="fas fa-star-o"></i>
                                            <i class="fas fa-star-o"></i>
                                            </span>
                                            @elseif($rating == 2 ?? '')
                                            <span class="ratings ">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-o"></i>
                                            <i class="fas fa-star-o"></i>
                                            <i class="fas fa-star-o"></i>
                                            </span>
                                            @endif
                                            </span>
                                            {!!"&nbsp;"!!}
                                            <span class="badge badge-warning text-white font-size-16">
                                            @if($rating == null)- @else{{$rating ?? ''}}/5 @endif
                                            </span>
                                            @else
                                            <span class="badge badge-warning text-white font-size-16">
                                            @if($rating == null)- @else{{$rating ?? ''}}/5 @endif
                                            </span>
                                            @endif
                                            </p>
                                            </div>
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
                            <a class="nav-item nav-link" id="nav-staff-tab" data-toggle="tab" href="#nav-staff"
                                role="tab" aria-controls="nav-staff" aria-selected="false">
                                Staff Details
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="course-syl-con">
                                <div class="course-syl-con-bottom">
							{{ $business->about ?? '' }}
                                   
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
                                            {{ $business->ports_of_operation }}
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-staff" role="tabpanel"               aria-labelledby="nav-staff-tab">
                            <div class="course-accordion" style="display: flex;flex-wrap: wrap;justify-content:center;">
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
                                {{-- <div class="ask">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        @foreach ($business->businessStaff as $staff)
                                            <div class="panel panel-default panel-active">
                                                Staff Name:   {{ $staff->staff_name ?? '' }}
                                            </div>
                                            <div class="panel panel-default panel-active">
                                                Job Title:   {{ $staff->staff_job_title ?? '' }}
                                            </div>
                                            <div class="panel panel-default panel-active">
                                                Email:   {{ $staff->staff_email ?? '' }}
                                            </div>
                                            <div class="panel panel-default panel-active">
                                                Mobile:   {{ $staff->staff_mobile ?? '' }}
                                            </div>
                                            <div class="panel panel-default panel-active">
                                                Skype:   {{ $staff->staff_skype ?? '' }}
                                            </div>
                                            <div class="panel panel-default panel-active">
                                                About:   {{ $staff->staff_about ?? '' }}
                                            </div>
                                            <div class="panel panel-default panel-active">
                                                Profile:   <img src="{{ $staff->profile ?? '' }}" style="width:80px; height:80px;" alt="">
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div> --}}
                                @foreach ($business->businessStaff as $staff)
                                <div class="wh-box col-md-3 col-sm-12 m-3">
                                    <div class="wh-pic">
                                        @if(isset($staff->profile)&& file_exists($staff->profile))
                                        <img src="{{ asset($staff->profile) }}" class="course-img" alt="thumb"style="height: 220px;">
                                        @else
                                        <img src="{{ asset('images/staff.png') }}" alt="" style="height: 220px">
                                        @endif
                                    </div>
                                    <div class="wh-content">
                                        <div class="wh-cate">
                                            <span>{{ $staff->staff_name ?? '' }}</span>
                                            <span>{{ $staff->staff_job_title ?? '' }}</span>
                                            <span>{{ $staff->staff_email ?? '' }}</span>
                                            <span>{{ $staff->staff_mobile ?? '' }}</span>
                                            <span>{{ $staff->staff_skype ?? '' }}</span>
                                            <span>{{ $staff->staff_about ?? '' }}</span>
                                        </div>
                       
                                    </div>
                                    {{-- <img src="{{asset('assets/img/choose/choose-icon.png')}}" class="wh-icon-float" alt="thumb"> --}}
                                </div>
                                @endforeach
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

            <div class="container my-3">
                <h4>Business Image</h4>
            </div>
                <div class="container"  style="
                display: flex;
                justify-content: end;
            ">
                @foreach ($business->businessImage as $image)
                    
               
                <div class="panel panel-default my-2" style="
                padding-right: 10px;
            ">
                   <img src="{{ asset($image->image) }}"style="width:120px; height:100px;" alt=""> 
                </div>
                @endforeach
            
            </div>

            <div class="container my-3">
                <h4>Business Video</h4>
            </div>
                <div class="container">
                @foreach ($business->businessVideo as $video)
                    
               
                <div class="panel panel-default my-2">
                    <a href="{{ $video->video ?? '' }}" style="color: blue;" target="_blank">Video Link</a> 
                    <hr>
                </div>
                @endforeach
            </div>

            <div class="container my-3">
                <h4>Working Hours</h4>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                                <th>
                                    Working Days
                                </th>
                              <th>
                                  status  
                              </th>
                              <th>
                                    Start Time
                              </th>
                              <th>
                                    End Time
                              </th>
                        </thead>
                        <tbody>
                         
                            
                                    <tr>
                                          <td>Sunday</td>
                                          <td>{{ $business->sunday ?? 'N/A'}}</td>
                                          <td>{{ $business->sunday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->sunday_end_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                          <td>Monday</td>
                                          <td>{{ $business->monday ?? 'N/A'}}</td>
                                          <td>{{ $business->monday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->monday_end_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                          <td>Tuesday</td>
                                          <td>{{ $business->tuesday ?? 'N/A'}}</td>
                                          <td>{{ $business->tuesday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->tuesday_end_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                          <td>Wednesday</td>
                                          <td>{{ $business->wednesday ?? 'N/A'}}</td>
                                          <td>{{ $business->wednesday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->wednesday_end_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                          <td>Thursday</td>
                                          <td>{{ $business->thursday ?? 'N/A'}}</td>
                                          <td>{{ $business->thursday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->thursday_end_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                          <td>Friday</td>
                                          <td>{{ $business->friday ?? 'N/A'}}</td>
                                          <td>{{ $business->friday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->friday_end_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                          <td>Saturday</td>
                                          <td>{{ $business->saturday ?? 'N/A'}}</td>
                                          <td>{{ $business->saturday_start_time ?? 'N/A' }}</td>
                                          <td>{{ $business->saturday_end_time ?? 'N/A' }}</td>
                                    </tr>
                           
                        </tbody>
                    </table>
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