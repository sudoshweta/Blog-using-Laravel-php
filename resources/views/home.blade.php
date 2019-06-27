@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                                <div>
                                    <header class="masthead">
                                <div class="container h-100">
                                  <div class="row h-100 align-items-center justify-content-center text-center">
                                    <div class="col-lg-10 align-self-end">
                                      <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Travel packages</h1>
                                      <hr class="divider my-4">
                                    </div>
                                    <div class="col-lg-8 align-self-baseline">
                                      <p class="text-white-75 font-weight-light mb-5">Lido Travels can help you build better experienses using awesome packages!</p>
                                      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                                    </div>
                                  </div>
                                </div>
                              </header>
                                </div>
                        </div>
                    @endif

                    <a href='/posts/create' class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3> 


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
