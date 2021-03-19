@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
@include('frontEnd.layout.headerindex')


@section('content')

<!-- Start Search
		============================================= -->
<div class="t-area header-1-1 de-padding">
    <div class="container">
        <div class="feature-wrapper un-form">
            <form action="{{ route('country.filter') }}" method="POST">
                <!-- <input type="text" class="srs-in" placeholder="Search Any Country ....."> -->
                @csrf
                <div class="srs-in">
                    <select name="country" id="country" class="srs-in" placeholder="Search Any Country ....." style="width: 80%;border: none; height: -webkit-fill-available;">
                        <?php $country=App\Models\Country::all(); ?>
                            <option value="">Select Country</option>
                            @foreach($country as $count)
                            <option value="{{ $count->id ?? '' }}" @if(isset($filtcon)&& $count->id == $filtcon)selected @endif>{{ $count->name ?? ''}}</option>
                            @endforeach
                        </select>
                </div>
                <button type="submit" class="srs-bt">Search</button>
            </form>
        </div>
    </div>
</div>
<!-- End  Search-->
<div id="portfolio" class="portfolio-area de-padding">
    <div class="container">
    
        <div class="portfolio-items-area">
            <div class="row">
                <div class="col-xl-12 portfolio-content">
                   
                    <div class="magnific-mix-gallery masonary">
                        <div id="portfolio-grid" class="portfolio-items">
                            @foreach($business as $bus)
                            <div class="pf-item video photography">
                                <div class="course-box rounded" style="border: solid 5px #FFA500;">
                                    <div class="course-pic">
                                    @if(isset($bus->featured_banner_image)&& file_exists($bus->featured_banner_image))
                                        <img src="{{ asset($bus->featured_banner_image ?? '') }}"9 class="course-img" alt="thumb"style="height: 220px;">
                                        @else
                                        <img src="{{ asset('images/sheep.jpeg') }}" alt="" style="height: 220px">
                                        @endif
                                        <div class="course-pic-content">
                                            <div class="course-rating">

                                            @if(auth()->user())
                                            <?php $bookmark=App\Models\Bookmark::where('business_id',$bus->id)->where('user_id',auth()->user()->id)->first();?>
                                            <span class="bookid" customid="{{$bus->id ?? ''}}">
                                            @if(isset($bookmark->business_id) && $bookmark->business_id == $bus->id && $bookmark->user_id == auth()->user()->id)
                                               
                                            <i class="fas fa fa-heart rounded-circle"  id="save-icon-{{$bus->id ?? ''}}"  check="0"  custom2="{{$bus->id ?? ''}}" aria-hidden="true" style="
                                                background: white;
                                                color: red;
                                                padding: 5px;
                                                border: 5px;"></i>
                                                            @else
                                                            <i class="fas fa fa-heart rounded-circle" id="save-icon-{{$bus->id ?? ''}}" check="1" custom2="{{$bus->id ?? ''}}" aria-hidden="true" style="
                                                                background: white;
                                                               
                                                                padding: 5px;
                                                                border: 5px;"></i>
                                                            
                                            @endif
                                        </span>
@endif

                                            </div>                                            
                                            <div class="course-author-time">
                                                <div class="course-author-pic">
                                                    <img src="{{ asset($bus->business_profile) }}" alt="thumb">
                                                    <h6 style="color: #ffa500;word-break: break-all">{{ $bus->name }}</h6>
                                                </div>
                                                <!-- <div class="course-time">
                                                    <i class="fas fa-book-open"></i>
                                                    <span>3:56:59</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="course-content">
                                        <div class="course-tags">
										
                                                        <div class="card-rating">
                                                        <div class="d-flex flex-wrap align-items-center pt-2">
                                                        <?php $rat = App\Models\BusinessRating::where('business_id',$bus->id)->average('rating_number');  $rating = round($rat);?>

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
                                            <div class="course-tags-link" style="white-space: nowrap">
                                                <label style="color: #ffa500;">Country: </label>
                                                <a>@if(isset($bus->country)&& $bus->country != null)<?php $country = App\Models\Country::where('id',$bus->country)->first();?> {{$country->name ?? ''}} @endif</a>
                                                <!-- <a href="#">Data</a> -->
                                            </div>
                                            <!-- <div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div> -->
                                        </div>
                                        <div class="course-text" style="word-break: break-all;">
                                            <a href="course-details.html">
                                                <h5 style="line-height: unset;">{{$bus->name ?? ''}}</h5>
                                            </a>
                                            <label for=""><span  style="color: #ffa500;">Category: </span>@if(isset($bus->category_name)){{ $bus->category_name }}@else N/A @endif</label>
                                            <!-- <label></label> -->
                                            <p>
                                                <!-- {{ $bus->about ?? ''}} -->
                                                <?php
                                            $myvalue = $bus->about ?? '';
                                            if (strlen($myvalue) > 140)
                                                {
                                                    $myvalue = substr($myvalue, 0, 80);
                                                    $myvalue = explode(' ', $myvalue);
                                                    array_pop($myvalue); 
                                                    $myvalue = implode(' ', $myvalue);
                                                } ?>
                                                <?php echo $myvalue . '...' ?>
                                            </p>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="{{route('business.detail',$bus->id)}}" class="course-btn">See
                                                Details <i class="ti ti-arrow-right"></i></a> 
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
@section('per_page_style')
<style>
.fa-star{
    color: gold;
}
.fa-star-0{
    color: black;
}

select {
  /* for Firefox */
  -moz-appearance: none;
  /* for Chrome */
  -webkit-appearance: none;
  
  /* font-family: 'Courier New', Courier, monospace; */
}
select option {
    padding: 10px 0;
}
</style>
@endsection
@section('per_page_script')
<script>
var media_id=""
// var user_id = 

$('.bookid').on('click',function(){
    // console.log('sdsd');
    var id= $(this).attr('customid');
    var saveEl = document.getElementById("save-icon");
    var iconType = $("#save-icon-"+id).attr('check');
//   console.log(iconType);
    if ( iconType == 1 ) {
        //  console.log('sds000');
        $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
            });
            $.ajax({
                type: "post",
                url: "{{route('bookmark.create')}}",
                data: {media_id: id, "_token": "{{ csrf_token() }}"},
                success: function (result) {
                    console.log('success');
                    $("#save-icon-"+id).attr('check',0);
                    $("#save-icon-"+id).css('color', 'red');
                }
            });
            // .done(function (response) {

            // })
            // .fail(function () {
            //     console.log('failure');
            // });

        } else {
    // console.log('sdsdelse');

            $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
                });
                $.ajax({
                    type: "post",
                    url: "{{route('bookmark.remove')}}",
                    data: {media_id: id, "_token": "{{ csrf_token() }}"},
                    success: function (result) {
                        // console.log('success');
                        $("#save-icon-"+id).attr('check',1);
                    $("#save-icon-"+id).css('color', 'gold');
                    }
                });
    
        }

});
 </script>
{{-- 
 <script>
    var media_id=""
    // var user_id = 
    
    
    $('.bookremove').on('click',function(){
        console.log('ddfdfdf');
        var media_id = $(this).attr('custom2');
        $(this).css('color', 'black');
   
    // document.getElementById(media_id).style.display="none";
    // console.log(media_id);
            $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
                });
                $.ajax({
                    type: "post",
                    url: "{{route('bookmark.remove')}}",
                    data: {media_id: media_id, "_token": "{{ csrf_token() }}"},
                    success: function (result) {
                        console.log('success');
    // document.getElementsByClassName('bookdone').css('background-color', 'red');
                    }
                });
    
    
    
    });
     </script> --}}
{{-- <script>
    $('#bookid').on('click',function(){
        console.log('sds11111d');
    var saveEl = document.getElementById("save-icon");
    var iconType = $(this).attr('check');
    var media_id = $(this).attr('custom2');

     if ( iconType === 0 ) {
         console.log('sdsd');
        $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
            });
            $.ajax({
                type: "post",
                url: "{{route('bookmark.create')}}",
                data: {media_id: media_id, "_token": "{{ csrf_token() }}"},
                success: function (result) {
                    console.log('success');
// document.getElementsByClassName('bookdone').css('background-color', 'red');

                }
            });
            // .done(function (response) {
            //     document.getElementById("save-icon").classList.add("far");
            //     document.getElementById("save").innerHTML="Save";
            // })
            // .fail(function () {
            //     console.log('failure');
            // });

        } else {
            $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
                });
                $.ajax({
                    type: "post",
                    url: "{{route('bookmark.remove')}}",
                    data: {media_id: media_id, "_token": "{{ csrf_token() }}"},
                    success: function (result) {
                        console.log('success');
    // document.getElementsByClassName('bookdone').css('background-color', 'red');
                    }
                });
    
        }
    });
            </script> --}}
@endsection