@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{asset('admin/images/icon/logo.png')}}" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{__('Email Address')}}</label>
                                <input id="email" class="au-input au-input--full form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{__('Password')}}</label>
                                <input id="password" class="au-input au-input--full form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}> {{__('Remember Me')}}
                                </label>
                                @if (Route::has('password.request'))
                                    <label>
                                        <a href="{{route('password.request')}}">{{__('Forgot Your Password?')}}</a>
                                    </label>
                                @endif
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{__('Login')}}</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Don't you have account?
                                <a href="{{route('register')}}">Sign Up Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
