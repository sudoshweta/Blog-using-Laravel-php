@extends('layouts.app')

@section('content')
   

    <!-- @if(count($services)>0)
    	<ul class="list-group">
    		@foreach($services as $service)
    			<li class="list-group-item">{{$service}}</li>
    		@endforeach
    	</ul>
    @endif -->
   
    <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Awesome Packages</h3>
            <p class="text-muted mb-0">Packages all over INDIA</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Coupens</h3>
            <p class="text-muted mb-0">Special discount and offers</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Ready to Move</h3>
            <p class="text-muted mb-0">If you want to travel tomorrow, we are here for you!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">Is it really for you and made with love?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    
@endsection
