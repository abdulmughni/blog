@extends('layouts.admin')

@section('content')
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
                <td>{{$user->id}}</td>
                <td><a href="{{route('user.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td><img src="{{$user->photo ? $user->photo->file : asset('images/default/user.png')}}" class="img-rounded" alt="" width="50"></td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->status == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td></td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection