 @extends('layouts\frontend')
 @section('content')




 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <h2>Donate Now</h2>
             </div>
             <div class="col-12">
                 <a href="">Home</a>
                 <a href="">Donate</a>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->


 <!-- Donate Start -->

 <div class="container">
     <div class="donate" data-parallax="scroll" data-image-src="{{asset('assets/img/donate.jpg')}}">
         <div class="row align-items-center">
             <div class="col-lg-7">
                 <div class="donate-content">
                     <div class="section-header">
                     

                         <p>Donate Now</p>
                         <h2>{{$causes->cause_name}}</h2>
                        
                     </div>
                     <div class="donate-text">
                         <p>
                        {{$causes->cause_description}}
                         </p>
                     </div>

                 </div>
             </div>
             <div class="col-lg-5">
                 <div class="donate-form">
                     <form>
                         <div class="control-group">
                             <input type="text" class="form-control" placeholder="Name" required="required" />
                         </div>
                         <div class="control-group">
                             <input type="email" class="form-control" placeholder="Email" required="required" />
                         </div>
                         <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             <label class="btn btn-custom active">
                                 <input type="radio" name="options" checked> $10
                             </label>
                             <label class="btn btn-custom">
                                 <input type="radio" name="options"> $20
                             </label>
                             <label class="btn btn-custom">
                                 <input type="radio" name="options"> $30
                             </label>
                         </div>
                         <div>
                         <a  href="{{route('stripe')}}" class="btn btn-custom" type="submit">Donate Now</a>
                         </div>
                     </form>
                 </div>
             </div>
             
         </div>
     </div>
 </div>
 
 <!-- Donate End -->

 @endsection