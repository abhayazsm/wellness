@extends('layouts.admin')

@section('main-content')
    <h1>Edit Media</h1>
    <form action="{{ route('admin.media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $media->title }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control" id="type" required>
                <option value="image" {{ $media->type == 'image' ? 'selected' : '' }}>Image</option>
                <option value="video" {{ $media->type == 'video' ? 'selected' : '' }}>Video</option>
            </select>
        </div>
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" name="file" class="form-control" id="file">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
