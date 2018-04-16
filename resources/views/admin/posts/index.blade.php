@extends('layouts.admin')

@section('content')

    @if(Session::has('post_created'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('post_created')}}
        </div>
    @endif

    @if(Session::has('post_deleted'))
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('post_deleted')}}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Feature Image</th>
                <th>User</th>
                <th>Category</th>
                <th>View Post</th>
                <th>Post Comment</th>
                <th>Delete</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $count = $count+1 }}</td>
                        <td><a href="{{route('post.edit', $post->id)}}">{{ substr($post->title, 0, 20) . "..." }}</a></td>
                        <td>{{ substr($post->description, 0, 40) . "..."}}</td>
                        <td><img src="{{$post->photo ? asset('') . $post->photo->file : asset('images/default/feature.png')}}" width="100" class="img-responsive" alt="{{$post->title}}"></td>
                        <td>{{ $post->user ? $post->user->name : "User is gone" }}</td>
                        <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
                        <td><a href="{{ route('post', $post->slug) }}" class="btn btn-primary" target="_blank">View</a></td>
                        <td><a href="{{ route('comments.show', $post->id) }}" class="btn btn-success">Comments</a></td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostController@destroy', $post->id]]) !!}
                            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
                        </td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {{ $posts->render() }}

    </div>
@endsection