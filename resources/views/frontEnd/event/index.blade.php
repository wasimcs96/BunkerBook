@extends('frontEnd.layout.master')
<!-- Start PreLoader
    ============================================= -->
    @include('frontEnd.layout.headerindex')


 @section('content')

 <!-- Start Search
		============================================= -->
	
		<!-- End  Search-->
        <div class="event-area de-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div data-text="Courses" class="site-title text-center">
                    <span class="sub-2">What's news?</span>
                    <h2>Upcoming events</h2>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex flex-wrap justify-content-center">
        @foreach($events as $event)
        <!-- <div class="event-card"> -->
            <div class="col-md-5 m-2" style="
    border: 5px solid #FFA500;
    border-radius: 10px;
    padding: 0;
">
                <div class="event-pic">
                    <img src="{{asset('frontEnd/assets/img/event/event-1.jpg') }}" alt="thumb">
                     <div class="event-date">
                        <p>27</p>
                        <span>sep</span>
                    </div>
                </div>
                <div class="event-content">
                    <div class="event-meta">
                        <p> Speaker: <span>Caron Simon</span></p>                                              		<p>{{$event->created_at ?? ''}}</p>
                    </div>
                    <div class="event-desc">
                        <h4>{{$event->title ?? ''}}</h4>
                        <!-- <p>
                            Inceptos habitant excepturi do rerum dignissim consequuntur assumenda aliqua tristique unde cursus aute torquent eros quis! Fames aliquip! Eius aspernatur, debitis error omnis iste ultrices massa
                        </p> -->
                        <div class="event-bottom">
                            <a href="{{route('event.detail',$event->id )}}" class="event-btn">Details</a>
                            <div class="event-bottom-right">
                                <i class="fas fa-ticket-alt"></i>
                                <span>Available (179)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        @endforeach
        </div>
    </div>
</div>
 @endsection
 @section('per_page_style')
 <style>
     @media(max-width: 768px){
        .event-desc h4 {
    font-size: 1.5rem;
    text-transform: capitalize;
}
     }
 </style>
 @endsection