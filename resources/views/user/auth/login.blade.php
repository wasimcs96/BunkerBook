@extends('layout.authentication')
@section('title', 'Login')


@section('content')
<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);">World Directory Of Ship Suppliers</a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">Login to your account</p>
                <form class="form-auth-small m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group ">

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">

                        <div class="col-md-12">
                            <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                                    @endif
                        </div>
                    </div>

                    {{-- <div class="form-group ">
                        <div class="col-md-8 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="form-group mb-0 ">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary btn-round btn-block">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
                        </div>
                    </div> --}}
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-round btn-block">
                        {{ __('Login') }}
                    </button>

                            <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
@stop

@section('page-styles')

@stop

@section('page-script')

@stop
