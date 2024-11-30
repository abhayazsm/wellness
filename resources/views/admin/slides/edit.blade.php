@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Edit Slide</h1>

    <form action="{{ route('admin.slides.update', $slide->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $slide->title }}">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $slide->subtitle }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $slide->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="button_text" class="form-label">Button Text</label>
            <input type="text" name="button_text" class="form-control" id="button_text" value="{{ $slide->button_text }}">
        </div>
        <div class="mb-3">
            <label for="button_link" class="form-label">Button Link</label>
            <input type="text" name="button_link" class="form-control" id="button_link" value="{{ $slide->button_link }}">
        </div>
        <button type="submit" class="btn btn-info">Update</button>
    </form>
</div>
@endsection
