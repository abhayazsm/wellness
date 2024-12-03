@extends('layouts.admin')

@section('main-content')
<h1 class="text-info">Edit Category</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
                
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-info">Update</button>
            <a class="btn btn-danger" href="{{route('admin.categories.index')}}">Back</a>
        </form>
    </div>
</div>
@endsection