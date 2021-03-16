@extends('layout.authentication')
@section('title', 'Register')


@section('content')
<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>
<div class="auth-main particles_js ">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Project</a>
        </div>
        <div class="card">
            <div class="body" style="margin-top: 88px;">
                <p class="lead">Create an account</p>
                <form class="form-auth-small m-t-20" id="registerForm" method="POST" >
                    @csrf

                    <div class="form-group">



                            <input id="first_name" type="text" placeholder="First Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group">



                            <input id="last_name" type="text" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group">



                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group">


                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group">


                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>


                    <div class="form-group">


                            <input id="mobile" type="integer" placeholder="Mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
{{-- 
                    <div class="form-group">




                                    <select id="role" name="role" class="form-control" required>
                                    <option value="">Choose your account Type</option>
                                    <option value="2">University</option>
                                    <option value="3">Student</option>
                                    <option value="4">Consultant</option>



                                    </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div> --}}


                            <button type="submit" class="btn btn-primary btn-round btn-block">
                                {{ __('Register') }}
                            </button>

                </form>
                {{-- <div class="separator-linethrough"><span>OR</span></div>
                <button class="btn btn-round btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                <button class="btn btn-round btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in with Twitter</button> --}}
                <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
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
