@extends('layouts.admin')

@section('main-content')
<h1 class="text-info">Add New Category</h1>
<div class="row">
    <div class="col-md-6">
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
            <a class="btn btn-danger" href="{{route('admin.categories.index')}}">Back</a>
        </form>
    </div>
</div>
@endsection