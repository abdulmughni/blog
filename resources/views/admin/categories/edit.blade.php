@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Edit Category</h1>
    <div class="col-md-6">
        @include('include.form_errors')
        {!! Form::model($categories, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category_id->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Category Name') !!}
            {!! Form::text('name', $category_id->name, ['class'=>'form-control', 'placeholder'=>'Create Category']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-md-6']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category_id->id]]) !!}
            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-md-6']) !!}
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
                            <td>{{$category->id}}</td>
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