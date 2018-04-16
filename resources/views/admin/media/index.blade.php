@extends('layouts.admin')

@section('content')

    @if($medias)
        <div class="table-responsive">

            <form action="delete/media" method="post" class="form-inline">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <div class="form-group">
                    <select name="checkboxArray" id="" class="form-control">
                        <option value="">Delete</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="delete_all" class="btn btn-primary" value="Submit">
                </div>

                <table class="table table-hover">
                    <thead>
                        <th><input type="checkbox" id="options" class="form-control"></th>
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
                            <td><input type="checkbox" name="checkboxArray[]" value="{{ $media->id }}" class="form-control checkboxMedia"></td>
                            <td>{{ $count = $count+1  }}</td>
                            <td><img src="{{ $media->file ? asset('') . $media->file : asset("images/default/feature.png") }}" class="img-responsive" width="150" alt""> </td>
                            <td>{{$media->created_at ? $media->created_at->diffForHumans() : 'No Create Date' }}</td>
                            <td>{{$media->updated_at ? $media->updated_at->diffForHumans() : 'No Update Date' }}</td>
                            <td>
                                <div class="form-group">
                                    <input type="submit" name="delete_single[{{ $media->id }}]" value="Delete" class="btn btn-danger">
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    @endif

    {{ $medias->render() }}

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#options').click(function(){
                if(this.checked) {
                    $('.checkboxMedia').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('.checkboxMedia').each(function() {
                        this.checked = false;
                    });
                }
            });
        });
    </script>
@endsection