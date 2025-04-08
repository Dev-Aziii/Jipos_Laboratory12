@extends('layout')

@section('title', 'Create Post')

@section('content')
    <div class="container mt-4">
        <h1>Create New Post</h1>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Body</label>
                <textarea name="body" class="form-control" rows="5">{{ old('body') }}</textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success">Create</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
