@extends('layout')

@section('title', 'All Posts')

@section('content')
    <section class="home-blog bg-sand">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center title-ex1">
                        <h2>Jipos | Blog APP</h2>
                        <p>A simple blog app using the Laravel framework performing basic CRUD functionality</p>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row mb-4">
                <div class="col text-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i> Add New Post
                    </a>
                </div>
            </div>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="day">{{ $post->created_at->format('d') }}</h5>
                                        <span class="month">{{ $post->created_at->format('M') }}</span>
                                    </div>
                                    <div class="ms-3">
                                        <a href="{{ route('posts.show', $post) }}">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                        </a>
                                        <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                                        <a href="{{ route('posts.show', $post) }}" class="btn btn-link">Read More</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this post?')">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
