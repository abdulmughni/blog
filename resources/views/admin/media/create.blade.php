@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
@endsection

@section('content')

    <h1 class="page-header">Upload Media</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}



    {!! Form::close() !!}

@endsection

@section('scripts')
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
@endsection