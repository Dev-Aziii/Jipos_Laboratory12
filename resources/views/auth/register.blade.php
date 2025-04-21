@extends('layout')

@section('title', 'Registration')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="max-width: 600px; width: 100%;">
            <div class="card-body">
                <div class="card-header d-flex flex-column align-items-center mb-3">
                    <h1><i class="fas fa-user-plus me-2"></i>REGISTER</h1>
                </div>

                <form method="POST" action="{{ route('registration.post') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="register-name" class="form-label">
                            <i class="fas fa-user me-1"></i> Full Name
                        </label>
                        <input id="register-name" class="form-control @error('name') is-invalid @enderror" type="text"
                            name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="register-email" class="form-label">
                            <i class="fas fa-envelope me-1"></i> Email
                        </label>
                        <input id="register-email" class="form-control @error('email') is-invalid @enderror" type="email"
                            name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="register-password" class="form-label">
                            <i class="fas fa-lock me-1"></i> Password
                        </label>
                        <input id="register-password" class="form-control @error('password') is-invalid @enderror"
                            type="password" name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="register-password-confirm" class="form-label">
                            <i class="fas fa-lock me-1"></i> Confirm Password
                        </label>
                        <input id="register-password-confirm"
                            class="form-control @error('password_confirmation') is-invalid @enderror" type="password"
                            name="password_confirmation" required>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-75">
                            <i class="fas fa-user-check me-1"></i> Sign Up
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center">
                <span>Already have an account?</span>
                <a href="{{ route('showLogin') }}" class="text-decoration-none ms-1">
                    <i class="fas fa-sign-in-alt"></i> Log in here
                </a>
            </div>
        </div>
    </div>
@endsection
