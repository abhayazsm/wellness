@extends('layouts.admin')

@section('main-content')
<div class="container">
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Slides</h1>
        <a href="{{ route('admin.slides.create') }}" class="btn btn-info">Add Slide</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide)
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td><img src="{{ Storage::url($slide->image_path) }}" alt="" style="width: 100px;"></td>
                    <td>{{ $slide->title }}</td>
                    <td>
                        <a href="{{ route('admin.slides.show', $slide->id) }}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <form action="{{ route('admin.slides.destroy', $slide->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Slide?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
