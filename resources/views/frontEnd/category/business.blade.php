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
                                            @if(isset($bookmark->business_id) && $bookmark->business_id == $bus->id && $bookmark->user_id == auth()->user()->id)
                                                <span><i class="fa fa-heart rounded-circle bookremove" custom2="{{$bus->id ?? ''}}" aria-hidden="true" style="
															background: white;
                                                           
															padding: 5px;
															border: 5px;"></i></span>
                                                            @else
                                                            <span><i class=" bookadd fa fa-heart rounded-circle"  custom2="{{$bus->id ?? ''}}"aria-hidden="true" style="
															background: white;
                                                            color: black;
															padding: 5px;
															border: 5px;"></i></span>
                                            @endif
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