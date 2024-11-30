@extends('layouts.admin')

@section('main-content')
    <h1>Add New Media</h1>
    <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control" id="type" required>
                <option value="image">Image</option>
                <option value="video">Video</option>
            </select>
        </div>
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" name="file" class="form-control" id="file" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
