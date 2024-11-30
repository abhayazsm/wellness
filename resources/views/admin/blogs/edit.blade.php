@extends('layouts.admin')

@section('main-content')

<h1>Edit Blog</h1>

<form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Blog Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $blog->title) }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug', $blog->slug) }}">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="contents">{{ old('content', $blog->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <select name="tags[]" id="tags" class="form-select @error('tags') is-invalid @enderror" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" 
                    @if(in_array($tag->id, old('tags', $blog->tags->pluck('id')->toArray()))) selected @endif>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
        @error('tags')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" id="image">
    </div> -->
    <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" name="image" id="image">
        @if($blog->image)
            <div class="mt-2">
                <p>Current Images:</p>
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100">
            </div>
        @endif
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" name="author" id="author" value="{{ old('author', $blog->author) }}">
    </div>

    <button type="submit" class="btn btn-warning">Updated Blog</button>
</form>

@endsection

@section('scripts')

@endsection
