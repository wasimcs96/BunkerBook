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
                        @if(isset($books)&& $books->count() < 1)
                        <div class="qwe" style="text-align: center;">
                            <i class="fas fa-bookmark fa-4x"></i>
                            <br><br>
                            <h3>Oops! No Bookmark Added</h3>
                        </div>
                        @endif
                        <div id="portfolio-grid" class="portfolio-items">

                            @foreach($books as $book)
                            <div class="pf-item video photography">
                                <div class="course-box rounded" style="border: solid 5px #FFA500;">
                                    <div class="course-pic">
                                    @if(isset($book->business->featured_banner_image)&& file_exists($book->business->featured_banner_image))
                                        <img src="{{ asset($book->featured_banner_image ?? '') }}"9 class="course-img" alt="thumb"style="height: 220px;">
                                        @else
                                        <img src="{{ asset('images/sheep.jpeg') }}" alt="" style="height: 220px">
                                        @endif
                                        <div class="course-pic-content">
                                            <div class="course-rating">

                                                @if(auth()->user())
                                                <?php $bookmark=App\Models\Bookmark::where('business_id',$book->business->id)->where('user_id',auth()->user()->id)->first();?>
                                                <span class="bookid" customid="{{$book->id ?? ''}}">
                                                @if(isset($bookmark->business_id) && $bookmark->business_id == $book->business->id && $bookmark->user_id == auth()->user()->id)
                                                   
                                                <i class="fas fa fa-heart rounded-circle"  id="save-icon-{{$book->business->id ?? ''}}"  check="0"  custom2="{{$book->business->id ?? ''}}" aria-hidden="true" style="
                                                    background: white;
                                                    color: red;
                                                    padding: 5px;
                                                    border: 5px;"></i>
                                                                @else
                                                                <i class="fas fa fa-heart rounded-circle" id="save-icon-{{$book->business->id ?? ''}}" check="1" custom2="{{$book->business->id ?? ''}}" aria-hidden="true" style="
                                                                    background: white;
                                                                   
                                                                    padding: 5px;
                                                                    border: 5px;"></i>
                                                                
                                                @endif
                                            </span>
    @endif
    
                                                </div>                                               
                                            <div class="course-author-time">
                                                <div class="course-author-pic">
                                                @if(isset($book->business->business_profile)&& file_exists($book->business->business_profile))
                                                    <img src="{{ asset($book->business->business_profile) }}" alt="thumb">
                                                    @else
                                                        <img src="{{ asset('images/sheep.jpeg') }}" alt="thumb">
                                                        @endif
                                                    <h6 style="color: #ffa500;word-break: break-all">{{ $book->name }}</h6>
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
                                                        <?php  $bbid= '' ;if(isset($book->business->id)&& $book->business->id != null){$bbid = $book->business->id;} $rat = App\Models\BusinessRating::where('business_id',$bbid)->average('rating_number');  $rating = round($rat);?>

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
                                                <a>@if(isset($book->business->country)&& $book->business->country != null)<?php $country = App\Models\Country::where('id',$book->country)->first();?> {{$country->name ?? ''}} @endif</a>
                                                <!-- <a href="#">Data</a> -->
                                            </div>
                                            <!-- <div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div> -->
                                        </div>
                                        <div class="course-text" style="word-break: break-all;">
                                            <a href="course-details.html">
                                                <h5 style="line-height: unset;">{{$book->business->name ?? ''}}</h5>
                                            </a>
                                            <label for=""><span  style="color: #ffa500;">Category: </span>@if(isset($book->business->category_name)){{ $book->business->category_name }}@else N/A @endif</label>
                                            <!-- <label></label> -->
                                            <p>
                                                <!-- {{ $book->about ?? ''}} -->
                                                <?php
                                            $myvalue = $book->business->about ?? '';
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
                                            <a href="{{route('business.detail',$book->business->id ?? '')}}" class="course-btn">See
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
@section('per_page_script')
<script>
var media_id=""
// var user_id = 

$('.bookid').on('click',function(){
    console.log('sdsd');
    var id= $(this).attr('customid');
    console.log(id);
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