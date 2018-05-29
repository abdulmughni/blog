@if($errors->any())
    <div class="col-md-12 alert alert-danger">
    @foreach($errors->all() as $error)

            {{$error}} <br>

    @endforeach
    </div>
@endif