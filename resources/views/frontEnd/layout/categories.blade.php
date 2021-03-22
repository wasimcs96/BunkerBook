<div class="cat-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div data-text="categories" class="site-title text-center">
                    <img src="{{ asset('frontEnd/assets/img/heading/choose.png') }}" alt="thumb">
                    <span class="sub-head">Find Perfect one</span>
                    <h2>Check all categories </h2>
                </div>
            </div>
        </div>
        {{-- <div class="cat-wrapper grid-4"> --}}
            		<div class="cat-wrapper grid-4" style="display: flex;
                    justify-content: center;">
			<?php $category=App\Models\Category::get();?>
			@foreach($category as $cat)
					<div class="cat-box" style="
					height: 235px;
				">
						<div class="cat-pic">
							<div>
							<img src="{{asset($cat->icon)}}" alt="thumb" style="
							height: 195px;
							width: 100%;
						">
					</div>
						<div class="cat-badge">
							<span>  <?php  $business=DB::table("business")
								->whereRaw("find_in_set('$cat->id',category)")->count();
								?> {{$business}}</span>
						</div>
					</div>
					<div class="cat-title" style="width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
						{{-- <div class="row"> --}}
						<a href="{{route('category.business',$cat->id)}}" style="margin: auto;"><h5>{{$cat->name ?? ''}}</h5>
						</a>
					{{-- </div> --}}

					</div>
				</div>
			@endforeach	
			{{-- </div> --}}
            {{-- <div class="cat-box">
                <div class="cat-pic">
                    <img src="{{ asset('frontEnd/assets/img/categories/1.jpg') }}" alt="thumb">
                    <div class="cat-badge">
                        <span>28</span>
                    </div>
                </div>
                <div class="cat-title">
                    <h5>Bunker Broker</h5>
                    <span><i class="ti ti-arrow-right"></i></span>
                </div>
            </div> --}}
            <!-- <div class="cat-box">
                <div class="cat-pic">
                    <img src="assets/img/categories/2.jpg" alt="thumb">
                    <div class="cat-badge">
                        <span>30</span>
                    </div>
                </div>
                <div class="cat-title">
                    <h5>See all Courses</h5>
                    <span><i class="ti ti-arrow-right"></i></span>
                </div>
            </div> -->
            {{-- <div class="cat-box">
                <div class="cat-pic">
                    <img src="{{ asset('frontEnd/assets/img/categories/1.jpg') }}" alt="thumb">
                    <div class="cat-badge">
                        <span>50</span>
                    </div>
                </div>
                <div class="cat-title">
                    <h5>Bunker Supplier </h5>
                    <span><i class="ti ti-arrow-right"></i></span>
                </div>
            </div> --}}
            {{-- <div class="cat-box">
                <div class="cat-pic">
                    <img src="{{ asset('frontEnd/assets/img/categories/4.jpg') }}" alt="thumb">
                    <div class="cat-badge">
                        <span>23</span>
                    </div>
                </div>
                <div class="cat-title">
                    <h5>Bunker Trader </h5>
                    <span><i class="ti ti-arrow-right"></i></span>
                </div>
            </div> --}}
            {{-- <div class="cat-box">
                <div class="cat-pic">
                    <img src="{{ asset('frontEnd/assets/img/categories/5.jpg') }}" alt="thumb">
                    <div class="cat-badge">
                        <span>60</span>
                    </div>
                </div>
                <div class="cat-title">
                    <h5>Bunker Surveyor & Testing </h5>
                    <span><i class="ti ti-arrow-right"></i></span>
                </div>
            </div> --}}
            {{-- <div class="cat-box">
                <div class="cat-pic">
                    <img src="{{ asset('frontEnd/assets/img/categories/6.jpg') }}" alt="thumb">
                    <div class="cat-badge">
                        <span>56</span>
                    </div>
                </div>
                <div class="cat-title">
                    <h5>Marine Oil and Lubricants </h5>
                    <span><i class="ti ti-arrow-right"></i></span>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
    <div class="more-btn">
        <a href="{{route('category.view')}}">View All Categories <i class="ti ti-arrow-right"></i></a>
    </div>
</div>
