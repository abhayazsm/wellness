@extends('layouts.admin')

@section('main-content')
<h1 class="text-info">Edit Modal Popup</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.modals.update', $modal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{ old('title', $modal->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea 
                    name="body" 
                    id="bodys" 
                    class="form-control @error('body') is-invalid @enderror">{{ old('body', $modal->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="button_text" class="form-label">Button Text</label>
                <input 
                    type="text" 
                    name="button_text" 
                    id="button_text" 
                    class="form-control @error('button_text') is-invalid @enderror" 
                    value="{{ old('button_text', $modal->button_text) }}">
                @error('button_text')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="button_link" class="form-label">Button Link</label>
                <input 
                    type="text" 
                    name="button_link" 
                    id="button_link" 
                    class="form-control @error('button_link') is-invalid @enderror" 
                    value="{{ old('button_link', $modal->button_link) }}">
                @error('button_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="background_color" class="form-label">Background Color</label>
                <input 
                    type="color" 
                    name="background_color" 
                    id="background_color" 
                    class="form-control @error('background_color') is-invalid @enderror" 
                    value="{{ old('background_color', $modal->background_color) }}">
                @error('background_color')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <input 
                    type="number" 
                    name="priority" 
                    id="priority" 
                    class="form-control @error('priority') is-invalid @enderror" 
                    value="{{ old('priority', $modal->priority) }}">
                @error('priority')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-info">Update</button>
                <a class="btn btn-danger" href="{{route('admin.modals.index')}}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
