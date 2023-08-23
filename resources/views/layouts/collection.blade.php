@extends('layouts.frontend')
@section('content')

 <!-- Page Header Start -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Cause</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">causes</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Causes Start -->

           
<div class="causes">
    <div class="container">
        <div class="section-header text-center">
             <p>Popular Causes</p>
            <h2>Let's know about charity causes around the world</h2>
            
           
             <div class="row"> 
           @foreach($causes as $cause)
           <div class="col-lg-3 col-md-6">
          
              <div class="causes-item" style="margin-left: 30px; width:200px;"  >
                  <div class="causes-img">
                      <img src="{{ asset('/uploads/image/'.$cause->cause_image) }}" alt="Image">
                  </div>
                  <div class="causes-progress">
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                             <span>85%</span>
                          </div>
                      </div>
                      <div class="progress-text">
                          <p><strong>Raised:</strong></p>
                          <p><strong>Goal:</strong>{{$cause->cause_goal}}</p>
                      </div>
                  </div>
                  <div class="causes-text">
                      <h3>{{$cause->cause_name}}</h3>
                      <p>{{ Str::limit($cause->cause_description, 100)}}</p>
                  </div>
                  <div class="causes-btn">
                      <a href="{{route('causeDetails', $cause->id)}}" class="btn btn-custom">Learn More</a>
                      <a href="{{route('donation.index',[$cause->id])}}" class="btn btn-custom">Donate Now</a>
                  </div>
              </div>
            </div>
     @endforeach
            </div> 
        
          
          
        </div>
      </div>
    </div>
</div>
<!-- Causes End -->


@endsection