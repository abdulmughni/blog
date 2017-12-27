@extends('layouts.admin')

@section('content')

    @if($medias)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medias as $media)
                    <tr>
                        <td>{{$media->id}}</td>
                        <td><img src="{{ $media->file ? asset('') . $media->file : asset("images/default/feature.png") }}" class="img-responsive" width="150" alt""> </td>
                        <td>{{$media->created_at ? $media->created_at->diffForHumans() : 'No Create Date' }}</td>
                        <td>{{$media->updated_at ? $media->updated_at->diffForHumans() : 'No Update Date' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection