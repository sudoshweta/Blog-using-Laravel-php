@extends('layouts.app')

@section('content')

	<h1>{{$post->title}}</h1>
	
	
	<div>
	<h3>{{$post->body}}</h3>
	</div>
	<hr> 
	<small>written on {{$post->created_at}}</small>


	<hr>
	<a href='/posts/{{$post->id}}/edit' class="btn btn-default">Edit Post</a>

	{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection