@extends('layouts.admin')

@section('content')
    @if(Session::has('comment_delete'))
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('comment_delete') }}
        </div>
    @endif

    @if(count($replies) > 0)
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
                    <th>Approving</th>
                    <th>Delete</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($replies as $reply)

                    <tr>
                        <th>{{ $count = $count+1 }}</th>
                        <th>{{ $reply->author }}</th>
                        <th>{{ $reply->email }}</th>
                        <th><img src="{{ $reply->photo ? asset('images') . $reply->photo : asset('images/default/feature.png' ) }}" width="100" alt="{{ $reply->author }}"></th>
                        <td>
                            @if(strlen($reply->body) > 10)
                                {{ substr($reply->body, 0, 30) . " ..." }}
                            @else
                                {{ $reply->body }}
                            @endif
                        </td>

                        <th>
                            @if($reply->is_active == 1)

                                {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentRepliesController@update', $reply->id]]) !!}
                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group">
                                    {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                                </div>
                                {!! Form::close() !!}

                            @else

                                {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentRepliesController@update', $reply->id]]) !!}
                                <input type="hidden" name="is_active" value="1">
                                <div class="form-group">
                                    {!! Form::submit('Un-Approve', ['class'=>'btn btn-info']) !!}
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </th>
                        <th> {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentRepliesController@destroy', $reply->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}</th>
                        <th>{{ $reply->created_at->diffForHumans() }}</th>
                        <th>{{ $reply->updated_at->diffForHumans() }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h1 class="page-header text-center">No Replies</h1>
    @endif


@endsection