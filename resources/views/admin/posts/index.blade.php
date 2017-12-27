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
                <th>Created at</th>
                <th>Updated at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a></td>
                        <td>{{$post->description}}</td>
                        <td><img src="{{$post->photo ? asset('') . $post->photo->file : asset('images/default/feature.png')}}" width="100" class="img-responsive" alt="{{$post->title}}"></td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostController@destroy', $post->id]]) !!}
                            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection