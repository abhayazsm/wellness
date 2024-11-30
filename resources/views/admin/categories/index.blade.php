@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Create Category</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                
                <!-- Delete Form with Confirmation -->
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display: inline-block;" onsubmit="return confirmDelete();">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    // Confirmation prompt before deletion
    function confirmDelete() {
        return confirm("Are you sure you want to delete this category?");
    }
</script>

@endsection
