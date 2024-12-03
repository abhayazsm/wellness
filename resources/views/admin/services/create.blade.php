@extends('layouts.admin')

@section('main-content')

<h1 class="text-info">Create Service</h1>

<form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="title" class="form-label">Service Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="image" class="form-label">Service Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="short_desc" class="form-label">Short Description</label>
                <input type="text" class="form-control @error('short_desc') is-invalid @enderror" name="short_desc" id="short_desc" value="{{ old('short_desc') }}">
                @error('short_desc')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Additional Image Fields -->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="side_image" class="form-label">Side Image</label>
                <input type="file" class="form-control @error('side_image') is-invalid @enderror" name="side_image" id="side_image">
                @error('side_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="footer_first_image" class="form-label">Footer First Image</label>
                <input type="file" class="form-control @error('footer_first_image') is-invalid @enderror" name="footer_first_image" id="footer_first_image">
                @error('footer_first_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="footer_second_image" class="form-label">Footer Second Image</label>
                <input type="file" class="form-control @error('footer_second_image') is-invalid @enderror" name="footer_second_image" id="footer_second_image">
                @error('footer_second_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="services">{{ old('content') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <button type="submit" class="btn btn-info">Create Service</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-danger">Cancel</a>
    </div>
    
</form>

@endsection

@section('scripts')
<!-- Include CKEditor -->
<!-- <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script> -->
<script>
    // CKEDITOR.replace('services');
</script>
@endsection
