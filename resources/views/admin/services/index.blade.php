@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Services</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-info">Create Service</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Short Description</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr>
            <td>{{ $service->title }}</td>
            <td>{{ $service->slug }}</td>
            <td>{{ Str::limit($service->short_desc, 50) }}</td>
            <td>{!! Str::limit(strip_tags($service->content), 50) !!}</td>
            <td>
                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this service?');">
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
