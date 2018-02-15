@extends('layouts.default')
@section('content')

    <div class="slider-wrapper">
        {{-- Login Form --}}
        <input type="radio" name="auth-form" id="login"  checked class="slider-radio">
        <form id="log-form" action="{{ route('login') }}" method="POST" class="res-form" >

            <div class="res-form-group form-error">
                <input id="log-email" type="email" name="email" value="{{ old('email') }}" required>
                <label for="log-email" class="">E-Mail Address</label>
            </div>
            <div class="res-form-group">
                <input id="log-password" type="password" class="" name="password" required>
                <label for="log-password" class="">Password</label>
            </div>

            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>

            <button form="log-form" type="submit" class=""><span>Log in</span></button>
            {{ csrf_field() }}
        </form>

        {{-- Register Form --}}
        <input type="radio" name="auth-form" id="register" class="slider-radio">
        <form id="reg-form" action="{{ route('register') }}" method="POST" class="res-form" >

            <div class="res-form-group">
                <label for="reg-login" class="">Login</label>
                <input id="reg-login" type="text" class="" name="login" value="{{ old('login') }}" required>
            </div>

            <div class="res-form-group">
                <label for="reg-email" class="">E-Mail Address</label>
                <input id="reg-email" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="res-form-group">
                <label for="reg-password" class="">Password</label>
                <input id="reg-password" type="password" class="" name="password" required>
            </div>

            <button form="reg-form" type="submit" class=""><span>Register</span></button>
            {{ csrf_field() }}
        </form>

    </div>

    {{-- Forgot link --}}
    <a class="forgot-link" href="{{ route('password.request') }}">Forgot Your Password?</a>

@endsection