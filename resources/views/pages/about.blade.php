@extends('layouts.app')

@section('content')


	<div>
		<!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">{{$about_one->description}}</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Exploring!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>
	</div>

@endsection