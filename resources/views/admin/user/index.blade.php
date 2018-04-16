@extends('layouts.admin')

@section('content')
    @if(Session::has('user_delete'))
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('user_delete')}}
        </div>

    @endif

    @if(Session::has('user_created'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('user_created')}}
        </div>

    @endif
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Picture</th>
                <th>Role</th>
                <th>User Activeness</th>
                <th>Create</th>
                <th>Update</th>
                <th>Delete Users</th>
            </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
            <tr>
                <td>{{$count = $count+1}}</td>
                <td><a href="{{route('user.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td><img src="{{$user->photo ? asset('') . $user->photo->file : asset('images/default/user.png')}}" class="img-rounded" alt="" width="50"></td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->status == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td>
                    {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy', $user->id]]) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{ $users->render() }}
</div>
@endsection