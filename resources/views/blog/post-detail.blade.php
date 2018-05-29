@extends('layouts.front-layout')

@section('title-and-meta')
    <title>Post | {{ $posts->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Job Portal">
@endsection

@section('content-sections')
    <section class="overlape">
        <div class="block no-padding">
            <div class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->

            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>{{ $posts->title }}</h3>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>



    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 column">
                        <div class="blog-single">
                            <div class="bs-thumb"><img src="{{ $posts->photo ? asset('') . $posts->photo->file : asset('images/default/feature.png') }}" alt=""></div>
                            <ul class="post-metas"><li><a href="#" title=""><img width="80" src="{{ $posts->user->photo ? asset('') . $posts->user->photo->file : asset('images/default/feature.png') }}" alt="">{{ $posts->user->name }}</a></li><li><a href="#" title=""><i class="la la-calendar-o"></i>{{ $posts->created_at->diffForHumans() }}</a></li><li><a class="metascomment" href="#commenting" title=""><i class="la la-comments"></i>{{ $posts->comment->count() }} comments</a></li><li><a href="#" title=""><i class="la la-file-text"></i>Travel, Skill, Jobs</a></li></ul>
                            <h2>{{ $posts->title }}</h2>
                            {!! $posts->description !!}
                            <div class="tags-share">
                                <div class="tags_widget">
                                    <span>Tags</span>
                                    <a href="#" title="">Adwords</a>
                                    <a href="#" title="">Sales</a>
                                    <a href="#" title="">Travel</a>
                                </div>
                                <div class="share-bar">
                                    <a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="share-google"><i class="la la-google"></i></a><span>Share</span>
                                </div>
                            </div>
                            <div id="commenting" class="post-navigation ">
                                <div class="post-hist prev">
                                    @if($last_post->id == $posts->id)

                                    @else
                                        <a href="{{ route('post', $prev->slug) }}" title=""><i class="la la-arrow-left"></i><span class="post-histext">Prev Post<i>{{ $prev->title }}</i></span></a>
                                    @endif
                                </div>
                                <div class="post-hist next">
                                    @if($first_post->id == $posts->id)

                                    @else
                                        <a href="{{ route('post', $next->slug) }}" title=""><span class="post-histext">Next Post<i>{{ $next->title }}</i></span><i class="la la-arrow-right"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="comment-sec">
                                <h3>{{ $posts->comment()->count() }} Comments</h3>

                                @if($comments->count() > 0)
                                @php $reply_form = 0; @endphp
                                <ul>
                                    @foreach($comments as $comment)
                                    <li>
                                        <div class="comment">
                                            <div class="comment-avatar"> <img src="{{ $comment->photo ? asset($comment->photo) : asset('images/default/user.png') }}" alt=""> </div>
                                            <div class="comment-detail">
                                                <h3>{{ $comment->author }}</h3>
                                                <div class="date-comment"><a href="#" title=""><i class="la la-calendar-o"></i>{{ $comment->created_at->format('l jS \\of F Y h:i A') }}</a></div>
                                                <p>{{ $comment->body }}</p>

                                                @php $reply_form = $reply_form+1 @endphp
                                                <a href="#reply_form{{ $reply_form }}" title="" data-toggle="collapse"><i class="la la-reply"></i>Reply</a>

                                                <div id="reply_form{{ $reply_form }}" class="reply-comment-section collapse">
                                                    {{ Form::open(['method'=>'POST', 'action'=>'PostCommentRepliesController@commentReply']) }}
                                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                    <div class="reply-field form-group">
                                                        {{ Form::textarea('body', null, ['class'=>'form-control', 'rows'=>'1', 'placeholder'=>'Reply Comment']) }}
                                                    </div>
                                                    <div class="reply-comment-section form-group">
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
                                        </div>

                                        @php $comment_replies = $comment->commentReply()->whereIsActive(1)->orderBy('id', 'desc')->get(); @endphp

                                        @if($comment_replies->count() > 0)
                                        <ul class="comment-child">
                                            @foreach($comment_replies as $comment_reply)
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-avatar"> <img src="{{ $comment_reply->photo ? asset($comment_reply->photo) : asset('images/default/user.png') }}" alt=""> </div>
                                                    <div class="comment-detail">
                                                        <h3>{{ $comment_reply->author }}</h3>
                                                        <div class="date-comment"><a href="#" title=""><i class="la la-calendar-o"></i>{{ $comment_reply->created_at->format('l jS \\of F Y h:i A') }}</a></div>
                                                        <p>{{ $comment_reply->body }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                    <h1>No Comments</h1>
                                @endif


                            </div>
                            <div class="commentform-sec">
                                <h3>Leave a Reply</h3>
                                @if(Session::has('comment_sent'))
                                    <div class="col-md-12 alert alert-success alert-dismissable fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{session('comment_sent')}}
                                    </div>
                                @endif
                                @include('include.form_errors')
                                {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store', 'role'=>'form']) !!}

                                <input type="hidden" name="post_id" value="{{ $posts->id }}" >
                                <span class="pf-title">Description</span>
                                <div class="form-group pf-field">
                                    {!! Form::textarea('body', NULL, ['class'=>'form-control', 'rows'=>'1']) !!}
                                </div>
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                    @include('include.blog-sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection