{!! Form::open(['method'=>'POST', 'action'=>'Auth\RegisterController@register']) !!}
    {{ csrf_field() }}

    <div class="select-user">
        <span id="candidate" class="active">{{ $candidate->name }}</span>
        <span id="employer">{{ $employer->name }}</span>
        <input id="user_role_id" type="hidden" name="user_role" value="<?php echo $candidate->name; ?>">
    </div>

    <div class="cfield">
        {!! Form::text('name', old('name'), ['id'=>'name', 'class'=>$errors->has('name') ? ' has-error' : '', 'placeholder'=>'Username', 'required', 'autofocus']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <i class="la la-user"></i>
    </div>

    <div class="cfield">
        {!! Form::email('email', old('email'), ['id'=>'email', 'class'=>$errors->has('email') ? ' has-error' : '', 'placeholder'=>'Email', 'required']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <i class="la la-envelope-o"></i>
    </div>

    <div class="cfield">
        {!! Form::password('password', ['id'=>'password', 'class'=>$errors->has('password') ? ' has-error' : '', 'placeholder'=>'*****', 'required']) !!}
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <i class="la la-key"></i>
    </div>

    <div class="cfield">
        {!! Form::password('password_confirmation', ['id'=>'password-confirm', 'placeholder'=>'Password Confirm', 'required']) !!}
        <i class="la la-key"></i>
    </div>

    <div class="dropdown-field">
        <select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
            <option>Web Development</option>
            <option>Web Designing</option>
            <option>Art &amp; Culture</option>
            <option>Reading &amp; Writing</option>
        </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 0px;">
            <a class="chosen-single">
                <span>Web Development</span>
                <div><b></b></div>
            </a>
            <div class="chosen-drop">
                <div class="chosen-search">
                    <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                </div>
                <ul class="chosen-results"></ul>
            </div></div>
    </div>

    <div class="cfield">
        <input type="text" placeholder="Phone Number">
        <i class="la la-phone"></i>
    </div>
    <button type="submit">
        SignUp
    </button>

{!! Form::close() !!}