@extends('layouts.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/Blog/css/login.css') }}">
<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            {!! Form::open() !!}
            <div class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

                     @if ($errors->has('email'))
                                  <p class="help is-danger">{{$errors->first('email')}} </p>
                                @endif

                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

                @if ($errors->has('password'))
                                  <p class="help is-danger">{{$errors->first('password')}} </p>
                                @endif

                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            {!! Form::close() !!} <!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script src="{{URL::to('assets')}}/Blog/js/login.js"></script>
        @endsection