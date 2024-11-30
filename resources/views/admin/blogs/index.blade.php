@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-info">Create Blog</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Category</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->slug }}</td>
            <td>{{ $blog->category->name }}</td>
            <td>{{ $blog->author }}</td>
            <td>
                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
