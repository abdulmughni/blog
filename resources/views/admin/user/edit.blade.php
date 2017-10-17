@extends('layouts.admin')

@section('content')

    @if(Session::has('user_updated'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('user_updated')}}
        </div>
    @endif

    <h1 class="page-header">Update User</h1>
    
    <div class="col-md-4">
        <img src="{{$user->photo ? asset('') . $user->photo->file : asset('images/default/user.png')}}" class="img-rounded" alt="" width="100%">
    </div>
    
    <div class="col-md-8">

        @include('include.form_errors')
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUserController@update', $user->id], 'files'=>true]) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', Null, ['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', Null, ['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', $roles, null, ['placeholder' => 'Choose User Role', 'class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('status', 'Status') !!}
            {!! Form::select('status', [1=>'Active', 0=>'Not Active'], $user->status, ['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('photo_id', 'Profile Picture') !!}
            {!! Form::file('photo_id', ['class'=>'btn btn-success']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
    
        <div class="col-md-6">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary btn-block']) !!}
        </div>


    
        {!! Form::close() !!}

        <div class="col-md-6">
            {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy', $user->id]]) !!}
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
        </div>

    </div>
    
@endsection