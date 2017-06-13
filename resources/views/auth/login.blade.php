@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            
            <h1 class="text-center login-title">Sign In To Continue To Webshop</h1>
            
            <div class="account-wall">
              
                <img class="profile-img" src="{{ url('/media/login-icon.jpg') }}">
                
                <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">

                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>    

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">    
                        <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Sign in</button>
                    </div>

                    <label class="checkbox pull-left">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                    <a href="{{ route('password.request') }}" class="pull-right need-help">Forgot Your Password? </a><span class="clearfix"></span>

                </form>

            </div>
            
            <a href="/register" class="text-center new-account">Create An Account </a>
        
        </div>
    
    </div>

</div>

@endsection
