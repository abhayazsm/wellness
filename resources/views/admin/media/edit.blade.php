@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Edit Media</h1>
    <form action="{{ route('admin.media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $media->title }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" class="form-control" id="type" required>
                        <option value="image" {{ $media->type == 'image' ? 'selected' : '' }}>Image</option>
                        <option value="video" {{ $media->type == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" name="file" class="form-control" id="file">
                </div>
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-info">Update</button>
            <a href="{{ route('admin.media.index') }}" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
