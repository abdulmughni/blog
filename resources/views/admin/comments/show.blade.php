@extends('layouts.admin')

@section('content')
    @if(Session::has('comment_delete'))
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('comment_delete') }}
        </div>
    @endif

    @if(count($comments) > 0)
        <h1 class="page-header">All Comments</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Author</th>
                    <th>Author Email</th>
                    <th>Author Image</th>
                    <th>Comment</th>
                    <th>Comment Replies</th>
                    <th>View Post</th>
                    <th>Approving</th>
                    <th>Delete</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)

                    <tr>
                        <th>{{ $count = $count+1 }}</th>
                        <th>{{ $comment->author }}</th>
                        <th>{{ $comment->email }}</th>
                        <th><img src="{{ $comment->photo ? asset('images') . $comment->photo : asset('images/default/feature.png') }}" width="100" alt="{{ $comment->author }}"></th>
                        <td>
                            @if(strlen($comment->body) > 10)
                                {{ substr($comment->body, 0, 30) . " ..." }}
                            @else
                                {{ $comment->body }}
                            @endif
                        </td>
                        <td><a href="{{ route('replies.show', $comment->id) }}" class="btn btn-info">Replies</a></td>
                        <th><a href="{{ route('post', $comment->post->slug) }}" target="_blank" class="btn btn-primary">View Post</a></th>
                        <th>
                            @if($comment->is_active == 1)

                                {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}
                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group">
                                    {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                                </div>
                                {!! Form::close() !!}

                            @else

                                {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}
                                <input type="hidden" name="is_active" value="1">
                                <div class="form-group">
                                    {!! Form::submit('Un-Approve', ['class'=>'btn btn-info']) !!}
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </th>
                        <th> {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentsController@destroy', $comment->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}</th>
                        <th>{{ $comment->created_at->diffForHumans() }}</th>
                        <th>{{ $comment->updated_at->diffForHumans() }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h1 class="page-header text-center">No Comments</h1>

    @endif


@endsection