@extends('layouts.main')
@section('title','Log in')
@section('content')
<div class="py-5">
    <div class="col-md-6 offset-md-3">
        <h4 class="text-center my-5">Log in</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="login-email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="login-email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="login-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="login-password" name="password" required autocomplete="current-password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember-me" name="remember">
                <label class="form-check-label" for="remember-me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-outline-dark">Log in</button>
            <a href="{{ route('password.request') }}">
                Forgot your password?
            </a>
        </form>
    </div>
</div>
@endsection