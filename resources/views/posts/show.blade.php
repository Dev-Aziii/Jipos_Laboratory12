@extends('layout')

@section('title', $post->title)

@section('content')
    <div class="container mt-4">
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">Posted on {{ $post->created_at->format('M d, Y') }}</p>
        <div class="mb-3">
            {{ $post->body }}
        </div>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to All Posts</a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Delete this post?')">Delete</button>
        </form>
    </div>
@endsection
