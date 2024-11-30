@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Add New Category</h1>
    <form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-info">Save</button>
</form>
</div>
@endsection