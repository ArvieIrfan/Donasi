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
                        <form method="POST" action="{{route('register')}}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input id="name" type="text" class="au-input au-input--full form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{__('Email Address')}}</label>
                                <input id="email" type="email" class="au-input au-input--full form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{__('Password')}}</label>
                                <input id="password" type="password" class="au-input au-input--full form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{__('Confirm Password')}}</label>
                                <input id="password-confirm" type="password" class="au-input au-input--full form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{__('Register')}}</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Already have an account?
                                <a href="{{route('login')}}">Sign In Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
