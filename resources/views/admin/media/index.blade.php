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
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medias as $media)
                    <tr>
                        <td>{{ $count = $count+1  }}</td>
                        <td><img src="{{ $media->file ? $media->file : asset("images/default/feature.png") }}" class="img-responsive" width="150" alt""> </td>
                        <td>{{$media->created_at ? $media->created_at->diffForHumans() : 'No Create Date' }}</td>
                        <td>{{$media->updated_at ? $media->updated_at->diffForHumans() : 'No Update Date' }}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $media->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection