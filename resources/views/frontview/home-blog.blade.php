@extends('layouts.view-blog')

@section('content')
    <div class="col-md-8">
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
            {!! $posts->description !!}
        </p>
        <hr>

        {{--<div id="disqus_thread"></div>--}}
        {{--<script>--}}

            {{--/**--}}
             {{--*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.--}}
             {{--*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/--}}
            {{--/*--}}
             {{--var disqus_config = function () {--}}
             {{--this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable--}}
             {{--this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable--}}
             {{--};--}}
             {{--*/--}}
            {{--(function() { // DON'T EDIT BELOW THIS LINE--}}
                {{--var d = document, s = d.createElement('script');--}}
                {{--s.src = 'https://amcblog-1.disqus.com/embed.js';--}}
                {{--s.setAttribute('data-timestamp', +new Date());--}}
                {{--(d.head || d.body).appendChild(s);--}}
            {{--})();--}}
        {{--</script>--}}
        {{--<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>--}}

        {{--<script id="dsq-count-scr" src="//amcblog-1.disqus.com/count.js" async></script>--}}
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
            @php $reply_form = 0 @endphp
            @foreach($comments as $comment)
                <div class="media">
                    <a class="feature-image" href="#">
                        <img class="img-responsive media-object" src="{{ $comment->photo ? asset('images') . $comment->photo : asset('images/default/feature.png') }}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->author }}
                            <small>{{ $comment->created_at->toDayDateTimeString() }}</small>
                        </h4>
                        {{ $comment->body }}
                    </div>

                    @if(count($comment->commentReply) > 0)
                        @php
                            $comment_reply = $comment->commentReply()->whereIsActive(1)->orderBy('id', 'desc')->get()
                        @endphp
                        @foreach($comment_reply as $replies)
                            <div class="media reply-comment">
                                <a class="feature-image pull-left" href="#">
                                    <img class="img-responsive media-object"  src="{{ $replies->photo ? asset('images') . $replies->photo : asset('images/default/feature.png') }}" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{ $replies->author }}
                                        <small>{{ $replies->created_at->diffForHumans() }}</small>
                                    </h4>
                                    {{ $replies->body }}
                                </div>
                            </div>
                        @endforeach
                    @endif

                        @php $reply_form = $reply_form+1 @endphp
                        <div class="reply-button">
                            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#reply_form{{ $reply_form }}">Reply</button>
                        </div>

                        <div id="reply_form{{ $reply_form }}" class="collapse">
                            {{ Form::open(['method'=>'POST', 'action'=>'PostCommentRepliesController@commentReply']) }}
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                            <div class="form-group">
                                {{ Form::textarea('body', null, ['class'=>'form-control', 'rows'=>'1', 'placeholder'=>'Reply Comment']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
                            </div>
                            {{ Form::close() }}
                        </div>
                    @if(Session::has('comment_sent'))
                        <div class="alert alert-success alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session('comment_sent')}}
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <h1>No Comments</h1>
        @endif
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