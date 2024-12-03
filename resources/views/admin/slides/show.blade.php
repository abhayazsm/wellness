@extends('layouts.admin')

@section('main-content')
<h1 class="text-info">Slide Details</h1>

<div class="card mb-4">
    <div class="card-header">
        <h2>{{ $slide->title ?? 'No Title' }}</h2>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label"><strong>Image:</strong></label>
            @if($slide->image_path)
                <div>
                    <img src="{{ asset('storage/' . $slide->image_path) }}" alt="Slide Image" class="img-fluid" style="max-width: 300px; height: auto;">
                </div>
            @else
                <p>No image available</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Title:</strong></label>
            <p>{{ $slide->title ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Subtitle:</strong></label>
            <p>{{ $slide->subtitle ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Description:</strong></label>
            <p>{{ $slide->description ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Button Text:</strong></label>
            <p>{{ $slide->button_text ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Button Link:</strong></label>
            <p>
                @if($slide->button_link)
                    <a href="{{ $slide->button_link }}" target="_blank">{{ $slide->button_link }}</a>
                @else
                    N/A
                @endif
            </p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Created At:</strong></label>
            <p>{{ $slide->created_at->format('d M, Y h:i A') }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Last Updated:</strong></label>
            <p>{{ $slide->updated_at->format('d M, Y h:i A') }}</p>
        </div>
    </div>
</div>
<div class="mb-4">
    <a href="{{ route('admin.slides.index') }}" class="btn btn-danger">Back to List</a>
    <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-info">Edit Slide</a>
</div>
@endsection
