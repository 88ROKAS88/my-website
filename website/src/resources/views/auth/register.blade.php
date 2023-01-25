@extends('layouts.main')
@section('title','Register')
@section('content')
<div class="py-5">
    <div class="col-md-6 offset-md-3">
        <h4 class="text-center my-5">Register</h4>



        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach


        <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="mb-3">
                <label for="register-name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-name" name="name" value="{{ old('name') }}" required autofocus>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror

            </div>


            <div class="mb-3">
                <label for="register-email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="register-email" name="email" value="{{ old('email') }}" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>


            <div class="mb-3">
                <label for="register-pass" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="register-pass" name="password" required autocomplete="new-password">
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="register-pass-conf" class="form-label">Confirm password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="register-pass-conf" name="password_confirmation" required>
                @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>



            <button type="submit" class="btn btn-outline-dark">Register</button>


            <a href="{{ route('login') }}">
                Already registered?
            </a>


        </form>



    </div>
</div>
@endsection