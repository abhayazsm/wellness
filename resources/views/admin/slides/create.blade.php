@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Add Slide</h1>

    <form action="{{ route('admin.slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" value="{{ old('subtitle') }}">
                    @error('subtitle')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="button_text" class="form-label">Button Text</label>
                    <input type="text" name="button_text" class="form-control @error('button_text') is-invalid @enderror" id="button_text" value="{{ old('button_text') }}">
                    @error('button_text')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="button_link" class="form-label">Button Link</label>
                    <input type="text" name="button_link" class="form-control @error('button_link') is-invalid @enderror" id="button_link" value="{{ old('button_link') }}">
                    @error('button_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>        

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-info">Save</button>
            <a class="btn btn-danger" href="{{route('admin.slides.index')}}">Back</a>
        </div>
    </form>
@endsection

