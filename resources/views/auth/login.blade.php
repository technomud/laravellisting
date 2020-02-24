@extends('layouts.app')

@section('content')

<div class="container">
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <h2>Login</h2>
          <p>Please enter your email and password</p>
        </div>
        <form id="Login"  class="form-horizontal" method="POST" action="{{ route('login') }}">
             {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
          <div class="forgot">
            <a href="{{ route('password.request') }}">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <div class="register">
              Not Registerred? <a href="{{ route('register') }}">Click Here</a>
          </div>
         {{--  <div class="register">
              Admin Login <a href="../admin/index.html">Click Here</a>
          </div> --}}
        </form>
      </div>
    </div>
  </div>
  </div>
@endsection
