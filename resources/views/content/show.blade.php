@extends('layouts.adminapp')

@section('admincontent')

	<h1>{{$entry->title}}</h1>
	
	
	<div>
	<h3>{{$entry->description}}</h3>
	</div>
	<hr> 
	<small>written on {{$entry->created_at}}</small>


	<hr>
	<a href='/admin/content/{{$entry->id}}/edit' class="btn btn-default">Edit Post</a>

	{!!Form::open(['action' => ['ContentController@destroy', $entry->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection