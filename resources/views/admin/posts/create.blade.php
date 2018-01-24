@extends('layouts.admin')

@section('content')
    @include('include.tinyeditor')
    <h1 class="page-header">Create Post</h1>
    @include('include.form_errors')
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Post Title') !!}
            {{Form::text('title', NULL,['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Select Category') !!}
            {!! Form::select('category_id', $categories, NULL, ['placeholder'=>'Select Category', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Feature Image') !!}
            {!! Form::file('photo_id', ['class'=>'btn btn-success']) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('description', NULL,['placeholder'=>'Post Description',  'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


@endsection