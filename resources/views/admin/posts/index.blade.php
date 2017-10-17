@extends('layouts.admin')

@section('content')
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
                        <td><a href="#" class="btn btn-danger">Delete Post</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection