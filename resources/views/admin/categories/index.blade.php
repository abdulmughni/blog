@extends('layouts.admin')

@section('content')

    @if(Session::has('category_created'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('category_created')}}
        </div>
    @endif

    @if(Session::has('category_updated'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('category_updated')}}
        </div>
    @endif

    @if(Session::has('category_deleted'))
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('category_deleted')}}
        </div>
    @endif

    <h1 class="page-header">Create Category</h1>
    <div class="col-md-6">
        @include('include.form_errors')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Category Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Create Category']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary col-md-6']) !!}
        </div>
        {!! Form::close() !!}

    </div>

    <div class="com-md-6">
        @if($categories)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$count = $count+1}}</td>
                                <td><a href="{{route('category.edit', $category->id)}}">{{$category->name}}</a></td>
                                <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No Create Date' }}</td>
                                <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'No Update Date' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection