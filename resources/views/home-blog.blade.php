@extends('layouts.view-blog')

@section('content')
    <!-- Title -->
    <h1>{{ $posts->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{ $posts->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $posts->created_at->toDayDateTimeString() }}</p>

    <hr>

    <!-- Preview Image -->
    <img width="100%" class="img-responsive" src="{{ $posts->photo ? asset('') . $posts->photo->file : asset('images/default/feature.png') }}" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead">
        {{ $posts->description }}
    </p>
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        @if(Session::has('comment_sent'))
            <div class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{session('comment_sent')}}
            </div>
        @endif
        @include('include.form_errors')
        {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store', 'role'=>'form']) !!}

        <input type="hidden" name="post_id" value="{{ $posts->id }}" >
            <div class="form-group">
                {!! Form::textarea('body', NULL, ['class'=>'form-control', 'rows'=>'3']) !!}
            </div>
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>

    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    @if(count($comments) > 0)
        @foreach($comments as $comment)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="img-responsive media-object" src="{{ $comment->photo ? asset('') . $comment->photo : asset('images/default/feature.png') }}" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{ $comment->author }}
                        <small>{{ $comment->created_at->toDayDateTimeString() }}</small>
                    </h4>
                    {{ $comment->body }}
                </div>
            </div>
        @endforeach
    @else
        <h1>No Comments</h1>
    @endif


        {{--<!-- Comment -->--}}
        {{--<div class="media">--}}
            {{--<a class="pull-left" href="#">--}}
                {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
            {{--</a>--}}
            {{--<div class="media-body">--}}
                {{--<h4 class="media-heading">Start Bootstrap--}}
                    {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                {{--</h4>--}}
                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                {{--<!-- Nested Comment -->--}}
                {{--<div class="media">--}}
                    {{--<a class="pull-left" href="#">--}}
                        {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="media-body">--}}
                        {{--<h4 class="media-heading">Nested Start Bootstrap--}}
                            {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                        {{--</h4>--}}
                        {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Nested Comment -->--}}
            {{--</div>--}}
        {{--</div>--}}



    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
            </div>
            <!-- /.input-group -->
        </div>

        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Blog Categories</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>
    </div>

@endsection