@extends('layouts.adminapp')

@section('admincontent')
    <h1>Edit Entry {{$entry->titleid}}</h1>
    {!! Form::open(['action' => ['ContentController@update', $entry->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <div class="form-group">
            {{Form::label('titleid', 'Page and Identification')}}
            {{Form::text('titleid', $entry->titleid, ['class' => 'form-control', 'placeholder' => 'Page and Identification'])}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $entry->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $entry->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
       
        {{form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection