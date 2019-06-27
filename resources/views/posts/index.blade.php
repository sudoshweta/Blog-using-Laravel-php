@extends('layouts.app')

@section('content')
	<br>
	<h1>Post Here!</h1>

	@if(count($posts) > 0)

		@foreach($posts as $post)
			<div class='well'>
				<h3><a href="/posts/{{$post->id}}">{{$post->title}} </a></h3>
				<h6> {{$post->body}} </h6>
				<small>Written on {{$post->created_at}}</small>
				<br>
				<br>
			</div>
		@endforeach
		{{$posts->links()}}

	@else
		<p>No Post Found</p>

	@endif

@endsection