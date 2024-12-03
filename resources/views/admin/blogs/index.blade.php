@extends('layouts.admin')

@section('main-content')
<style>
    .bg-info{
        color:#36b9cc;
    }
</style>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-info">Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-info text-white">
        <i class="fa fa-plus me-1"></i> Create Blog
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Blog List</h5>
    </div>
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-info text-center">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->slug }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>{{ $blog->author }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No blogs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
