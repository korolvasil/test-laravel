@extends('layouts.default')
@section('content')
    <h1>Auth Page</h1><br><br>
    {{--
    <ul class="accordion">
        <li>
            <a href="#login" class="accordion-header">Login</a>
            <div class="accordion-content" id="login">
                @include('auth.partials.login-form')
            </div>
        </li>
        <li>
            <a href="#register" class="accordion-header">Register</a>
            <div class="accordion-content" id="register">
                @include('auth.partials.register-form')
            </div>
        </li>
    </ul>
    --}}
    <div class="form-toggler">
        <label for="login">Log in <i data-feather="log-in"></i></label>
        <label for="register">Join us <i data-feather="user-plus"></i></label>
    </div>

    <div class="slider-wrapper">


        {{-- Login Form --}}
        <input type="radio" name="auth-form" id="login" class="hidden">
        <form id="log-form" action="{{ route('login') }}" method="POST" class="res-form" >

            <div class="res-form-groups form-error">
                <label for="log-email" class="">E-Mail Address </label>
                <input id="log-email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="res-form-groups">
                <label for="log-password" class="">Password</label>
                <input id="log-password" type="password" class="" name="password" required>
            </div>

            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>

            <button form="log-form" type="submit" class="">Log in</button>
            {{ csrf_field() }}
        </form>

        {{-- Register Form --}}
        <input type="radio" name="auth-form" id="register" class="hidden">
        <form id="reg-form" action="{{ route('register') }}" method="POST" class="res-form" >

            <div class="res-form-groups">
                <label for="reg-login" class="">Login</label>
                <input id="reg-login" type="text" class="" name="login" value="{{ old('login') }}" required autofocus>
            </div>

            <div class="res-form-groups">
                <label for="reg-email" class="">E-Mail Address</label>
                <input id="reg-email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="res-form-groups">
                <label for="reg-password" class="">Password</label>
                <input id="reg-password" type="password" class="" name="password" required>
            </div>

            <button form="reg-form" type="submit" class="">Register</button>
            {{ csrf_field() }}
        </form>

        {{-- Forgot link --}}
        <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
    </div>


@endsection