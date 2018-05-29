{!! Form::open(['method'=>'POST', 'action'=>'Auth\LoginController@login']) !!}
    {{ csrf_field() }}

    <div class="cfield">
        {!! Form::email('email', old('email'), ['id'=>'email', 'class'=>$errors->has('password') ? ' has-error' : '','placeholder'=>'User Email', 'required', 'autofocus']) !!}
        <i class="la la-user"></i>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="cfield">
        {!! Form::password('password', ['id'=>'password', 'class'=>$errors->has('password') ? ' has-error' : '','placeholder'=>'******', 'required']) !!}
        <i class="la la-key"></i>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <p class="remember-label">
        <input id="rememer_me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><label for="rememer_me">Remember Me</label>
    </p>

    <a href="{{ route('password.request') }}">
        Forgot Password?
    </a>
    <button type="submit">Login</button>
{!! Form::close() !!}