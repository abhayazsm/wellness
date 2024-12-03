@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="text-info">Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Create Category</a>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Category List</h5>
    </div>
    <div class="card-body">
        <!-- Contact us Table -->
        <table class="table table-hover align-middle">
                <thead class="table-info">
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
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $categories->links() }}
        </div>
    </div>
</div>

<script>
    // Confirmation prompt before deletion
    function confirmDelete() {
        return confirm("Are you sure you want to delete this category?");
    }
</script>

@endsection
