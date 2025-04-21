@extends('layout')

@section('title', 'Home')

@section('content')

    <div class="container mt-4">
        @if (session('error'))
            <div class="alert alert-danger text-center w-100 mt-2">
                <i class="fas fa-exclamation-triangle me-1"></i> {{ session('error') }}
            </div>
        @endif
        <div class="d-flex justify-content-end">
            @if (Route::has('showLogin'))
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('showLogin') }}" class="btn btn-outline-primary me-2">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                    <a href="{{ route('showRegister') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                @endauth
            @endif
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 100px);">
        <div class="card shadow-lg border-0" style="max-width: 600px; width: 100%;">
            <div class="card-body text-center">
                <h1 class="card-title mb-3">
                    <i class="fas fa-blog"></i> Welcome to <strong>JiposBlog</strong>
                </h1>
                <p class="card-text fs-5">
                    A <strong>simple blog application</strong> built with Laravel. You can create, edit, and delete posts
                    easily w/ login and registration functions!
                </p>
                <hr>
                <p class="text-muted">
                    <i class="fas fa-code"></i> Powered by Laravel & Bootstrap
                </p>
            </div>
        </div>
    </div>

@endsection
