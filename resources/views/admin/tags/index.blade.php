@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Tags</h1>
    <a href="{{ route('admin.tags.create') }}" class="btn btn-info">Create Tag</a>
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
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->name }}</td>
                <td>{{ $tag->slug }}</td>
                <td>
                    <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this tags?');">
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
