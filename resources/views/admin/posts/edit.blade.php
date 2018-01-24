@extends('layouts.admin')

@section('content')
    @if(Session::has('post_updated'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('post_updated')}}
        </div>
    @endif
    <h1 class="page-header">Update Post</h1>
    @include('include.form_errors')
    @include('include.tinyeditor')
    <div class="col-md-7">
        {!! Form::model($posts, ['method'=>'PATCH', 'action'=>['AdminPostController@update', $posts->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Post Title') !!}
                {!! Form::text('title', $posts->title, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Select Category') !!}
                {!! Form::select('category_id', $categories, null, ['placeholder' => 'Select Category', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Feature Image') !!}
                {!! Form::file('photo_id', ['class'=>'btn btn-success']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('description', $posts->description, ['class'=>'form-control']) !!}
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
                </div>
            </div>

        {!! Form::close() !!}

            <div class="col-md-2">
                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostController@destroy', $posts->id]]) !!}
                    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
    </div>
    <div class="col-md-5">
        <img src="{{$posts->photo ? asset('') . $posts->photo->file : asset('images/default/feature.png')}}" class="img-responsive" alt="{{Auth::user()->name}} profile picture">
    </div>
@endsection