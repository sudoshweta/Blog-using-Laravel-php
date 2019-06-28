@extends('layouts.adminapp')

@section('admincontent')
	<h1>{{$content->title}}</h1>
	
	
	<div>
	<h3>{{$content->description}}</h3>
	</div>
	<hr> 
	<small>written on {{$content->created_at}}</small>


@endsection