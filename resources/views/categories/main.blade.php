@extends('layouts.frontend')
@section('content') 
 <!-- Page Header Start -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>category</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Categories

                </a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Categories</p>
            <h2>We believe that we can save more lifes with you</h2>
        </div>
        @foreach($categories as $cat)
        <div class="row">
        
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                  <a href="{{route('causet',[$cat->id])}}">
                    {{-- <div class="service-icon">
                        <i class="flaticon-social-care"></i>
                    </div> --}}
                    <div class="service-text">
                        <h5>{{$cat->category_name}}</h5>
                    </div>
                  </a>
              </div>
            </div>
         
        </div>
        @endforeach
        
    </div>
</div>
<!-- Service End -->
@endsection