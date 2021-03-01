@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')

	<!-- Start Categories
		============================================= -->
		<div class="cat-area de-padding">
			<div class="container my-4">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div data-text="categories" class="site-title text-center">
							
							<h2>Check all categories and enroll </h2>
						</div>
					</div>
				</div>
				<div class="cat-wrapper grid-4">
				@foreach($category as $cat)
					<div class="cat-box" style="
					height: 235px;
				">
						<div class="cat-pic">
							<div>
							<img src="{{asset($cat->icon)}}" alt="thumb" style="
							height: auto;
							width: 197px;
						">
						</div>
							<div class="cat-badge">
								<span>  <?php  $business=DB::table("business")
									->whereRaw("find_in_set('$cat->id',category)")->count();
									?> {{$business}}</span>
							</div>
						</div>
						<div class="cat-title">
							{{-- <div class="row"> --}}
							<a href="{{route('category.business',$cat->id)}}"><h5>{{$cat->name ?? ''}}</h5>
							</a>
						{{-- </div> --}}

						</div>
					</div>
				@endforeach	
				</div>
			</div>
			<div class="more-btn">
				<a href="#">View All Courses <i class="ti ti-arrow-right"></i></a>
			</div>
		</div>
		<!-- End Categories-->
 @section('content')
 @endsection