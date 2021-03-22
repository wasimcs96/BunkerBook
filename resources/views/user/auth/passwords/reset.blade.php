
@extends('frontEnd.layout.master')

@section('content')
<div class="container" style="
">
    <div class="row justify-content-center">
    <img src="{{asset('frontEnd\assets\img\header\processed.png')}}" alt="" style="
    width: 381px;
">
<div class="col-md-8">
    <div class="card">
        <div class="card-header" style="
        color: #FFA500;
    ">{{ __('Reset Password') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4" style="
                    text-align: center;
                ">
                        <button type="submit" class="btn btn-primary" style="
                        width: 167px;
                        height: 29.5px;
                        font-size: 12px;
                        background: #FFA500;
                        border: #FFA500;
                    ">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
@section('per_page_style')
<style>

.footer-widget{
    display:none;
}
body{
    background: #FFA500;
}
</style>
@endsection