@extends('layouts.admin')

@section('content')
    <h1 class="page-header">Create User</h1>
    @include('include.form_errors')
    {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store', 'files'=>true]) !!}

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
            {!! Form::select('status', [1=>'Active', 0=>'Not Active'], 0, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Profile Picture') !!}
            {!! Form::file('photo_id',['class'=>'btn btn-success']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close() !!}


@endsection