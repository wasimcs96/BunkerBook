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
                <select name="country" id="country" class="srs-in" placeholder="Search Any Country .....">
                <?php $country=App\Models\Country::all(); ?>
                    <option value="">Select Country</option>
                    @foreach($country as $count)
                    <option value="{{ $count->id ?? '' }}" @if(isset($filtcon)&& $count->id == $filtcon)selected @endif>{{ $count->name ?? ''}}</option>
                    @endforeach
                </select>
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
                                <div class="course-box rounded" style="border: solid 5px #2E35D9;">
                                    <div class="course-pic">
                                        <img src="{{ asset($bus->business_profile) }}"9 class="course-img" alt="thumb">
                                        <div class="course-pic-content">
                                            <div class="course-rating">
                                            @if(auth()->user())
                                            <?php $bookmark=App\Models\Bookmark::where('business_id',$bus->id)->where('user_id',auth()->user()->id)->count();?>
                                            @if($bookmark > 0)
                                                <span><i class="fa fa-heart rounded-circle" aria-hidden="true" style="
															background: white;
                                                           
															padding: 5px;
															border: 5px;"></i></span>
                                                            @else
                                                            <span><button class="bookadd"   custom2="{{$bus->id ?? ''}}" style="background: none;border: none;" ><i class="fa fa-heart rounded-circle" aria-hidden="true" style="
															background: white;
                                                            color: black;
															padding: 5px;
															border: 5px;"></i></button></span>
                                            @endif
@endif

                                            </div>                                            
                                            <div class="course-author-time">
                                                <div class="course-author-pic">
                                                    <img src="{{ asset($bus->featured_banner_image) }}" alt="thumb">
                                                    <h6>benjamin Nicholas</h6>
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
										<div class="course-rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														</div>	
                                            <div class="course-tags-link">
                                                <a href="#">{{$bus->country ?? ''}}</a>
                                                <!-- <a href="#">Data</a> -->
                                            </div>
                                            <!-- <div class="course-lesson">
														<i class="fas fa-book-open"></i>
														<p class="mb-0">26 lesson</p>
													</div> -->
                                        </div>
                                        <div class="course-text" style="word-break: break-all;">
                                            <a href="course-details.html">
                                                <h5>{{$bus->name ?? ''}}</h5>
                                            </a>
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
@section('per_page_script')
<script>
var media_id=""
// var user_id = 


$('.bookadd').click(function(){


    var media_id = $(this).attr('custom2');
console.log(media_id);
// document.getElementById(media_id).style.display="none";
// console.log(media_id);
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

                }
            });



});
 </script>
@endsection