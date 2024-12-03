@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Create Media</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Media Creation Form -->
    <form method="POST" action="{{ route('admin.media.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        id="title" 
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select 
                        name="type" 
                        class="form-control @error('type') is-invalid @enderror" 
                        id="type">
                        <option value="image" {{ old('type') == 'image' ? 'selected' : '' }}>Image</option>
                        <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="file">File</label>
                    <input 
                        type="file" 
                        name="file" 
                        class="form-control @error('file') is-invalid @enderror" 
                        id="file">
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-info">Save</button>
            <a href="{{ route('admin.media.index') }}" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
