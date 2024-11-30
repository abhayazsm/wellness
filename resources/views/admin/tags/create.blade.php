@extends('layouts.admin')

@section('main-content')

<h1>Create New Tag</h1>

<form action="{{ route('admin.tags.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Tag Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>

@endsection
