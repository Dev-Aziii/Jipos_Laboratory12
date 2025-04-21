@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="max-width: 600px; width: 100%;">
            <div class="card-header d-flex flex-column align-items-center mb-3">
                <h1><i class="fas fa-sign-in-alt me-2"></i>LOGIN</h1>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger text-center w-100 mt-2">
                        <i class="fas fa-exclamation-triangle me-1"></i> {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger text-center w-100 mt-2">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li><i class="fas fa-times-circle me-1"></i>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf

                    <input type="hidden" name="redirect_url" value="{{ request()->query('redirect_url') }}">

                    <div class="mb-3">
                        <label for="login-email" class="form-label">
                            <i class="fas fa-envelope me-1"></i>Email
                        </label>
                        <input id="login-email" class="form-control" type="email" name="email"
                            value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="login-password" class="form-label">
                            <i class="fas fa-lock me-1"></i>Password
                        </label>
                        <input id="login-password" class="form-control" type="password" name="password" required>
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <button class="btn btn-primary w-75">
                            <i class="fas fa-sign-in-alt me-1"></i>Log in
                        </button>
                        <a href="#" class="text-decoration-none mt-2">
                            <i class="fas fa-question-circle me-1"></i>Forgot your password?
                        </a>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center">
                <span>Don't have an account yet?</span>
                <a href="{{ route('showRegister') }}" class="text-decoration-none ms-1">
                    <i class="fas fa-user-plus"></i> Sign up here
                </a>
            </div>
        </div>
    </div>
@endsection
