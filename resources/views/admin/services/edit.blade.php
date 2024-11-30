@extends('layouts.admin')

@section('main-content')

<h1>Edit Service</h1>

<form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Service Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $service->title) }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug', $service->slug) }}">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="short_desc" class="form-label">Short Description</label>
        <input type="text" class="form-control @error('short_desc') is-invalid @enderror" name="short_desc" id="short_desc" value="{{ old('short_desc', $service->short_desc) }}">
        @error('short_desc')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="services">{{ old('content', $service->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Replace Service Images</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" multiple>
        @if($service->image)
            <div class="mt-2">
                <p>Current Images:</p>
                <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" width="100">
            </div>
        @endif
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-warning">Update Service</button>
</form>

@endsection

@section('scripts')
@endsection
