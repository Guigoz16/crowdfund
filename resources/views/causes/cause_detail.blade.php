@extends('layouts.frontend')
@section('content')
@if($causes)
<div class="section-header">
<div class="container">


<div class="row tm-row">
    <div class="col-12">
        <div class="causes-img">
            <img src="{{ asset('/uploads/image/'.$causes->cause_image) }}" alt="Image">
        </div>
    </div>
</div>
</div>


<div class="row tm-row">
    <div class="col-lg-8 tm-post-col">
        <div class="tm-post-full"> 
                             
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title">{{$causes->cause_name}}</h2>
                <p>{{$causes->cause_description}}</p>
                <span class="d-block text-right tm-color-primary">{{$causes->created_at}}</span>
            </div>
        </div>
        <hr class="mb-3 tm-hr-primary">
        <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
        <ul class="tm-mb-75 pl-5 tm-category-list">
            @foreach($categories as $c)
            <li><a href="{{route('causet',$c->id)}}" class="tm-color-primary">{{$c->category_name}}</a></li>
            @endforeach
        </ul>
        <hr class="mb-3 tm-hr-primary">
    </div>
    
    <aside class="col-lg-4 tm-aside-col">
        <div class="tm-post-sidebar">
            <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related causes</h2>
            <a href="#" class="d-block tm-mb-40">
                <ul>
                @foreach($related as $r)
                    <li>
                        <a href="{{route('causeDetails',['id'=>$r->id])}}"><img src="{{ asset('/uploads/image/'.$r->cause_image) }}" alt="Image"></a>
                        <h3>{{$r->cause_name}}</h3>
                        <p>{{ Str::limit($r->cause_description, 50)}}</p>
                    </li>
                @endforeach
                </ul>
            </a>
        </div>                    
    </aside>
</div>
</div>
@endif
@endsection