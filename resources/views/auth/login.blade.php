@extends('layouts.login')

@section('title')
LM Tour and Travel | Login
@endsection


@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4" >We explore the new life <br>
                    much better</h1>
                    <img src="frontend/images/pic_sign_in.png" alt="" class="2-75 d-none d-sm-flex" >
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="frontend/images/lmtour_logo.png" alt="" class="w-50 mb-4" >
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                name="email"
                                required autocomplete="email" autofocus
                                id="email"
                                aria-describedby="emailHelp">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password"
                                name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox"
                                class="form-check-input"
                                name="remember"
                                id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            <button type="submit" class="btn btn-login btn-block">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <p class="text-center mt-4">
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}</a>
                            </p>
                            <p class="text-center mt-4">
                                <a href="{{ route('register') }}">
                                    {{ __('Create an Account?') }}</a>
                                </p>
                             @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
