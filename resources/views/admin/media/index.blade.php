@extends('layouts.admin')

@section('main-content')
<style>
    /* General Styles */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 0px; /* Controls gap between the cards */
    }

    .col-sm-6,
    .col-md-4,
    .col-lg-3 {
        box-sizing: border-box; /* Ensures padding and borders are included in the width calculation */
    }

    .gallery-style3 {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .gallery-style3:hover {
        transform: translateY(-5px);
    }

    .gallery-style3 {
        position: relative;
        overflow: hidden;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-style3:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Image Styles */
    .gallery-style3 img {
        width: 100%;
        height: 20rem;
        display: block;
        border-bottom: 1px solid #ddd;
        object-fit: cover;
    }

    /* Eye Icon Styles */
    .icon-btn {
        position: absolute;
        top: 42%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 24px;
        background: rgba(0, 0, 0, 0.6);
        padding: 12px;
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
        z-index: 10;
    }

    .gallery-style3:hover .icon-btn {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1.2);
    }

    /* Action Buttons */
    .actions {
        display: flex;
        justify-content: center;
        gap: 10px;
        padding: 10px;
        background: #f8f9fa;
        border-top: 1px solid #ddd;
    }

    .actions .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        font-size: 16px;
        border-radius: 50%;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .actions .btn-warning {
        color: #fff;
        background-color: #ffc107;
        border: none;
    }

    .actions .btn-warning:hover {
        background-color: #e0a800;
        transform: scale(1.1);
    }

    .actions .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border: none;
    }

    .actions .btn-danger:hover {
        background-color: #bd2130;
        transform: scale(1.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .actions {
            flex-direction: row;
            gap: 5px;
            display: flex;
        }
    }

</style>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Media</h1>
        <a href="{{ route('admin.media.create') }}" class="btn btn-info">Add Media</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container"> 
        <div class="row mt-4  gx-3">
            @foreach ($mediaItems as $media)
                <div class="col-sm-6 col-lg-4 mt-4">
                    <div class="gallery-style3">
                        <a href="{{ asset('storage/'.$media->file_path) }}" target="_blank" class="icon-btn">
                            <i class="far fa-eye"></i>
                        </a>
                        @if($media->type == 'video')
                            <a href="{{ asset('storage/'.$media->file_path) }}" target="_blank">
                                <img src="{{ asset('img/video_thumbnail.png') }}" alt="{{ $media->title }}" class="w-100">
                            </a>
                        @else
                            <img src="{{ asset('storage/'.$media->file_path) }}" alt="{{ $media->title }}" class="w-100">
                        @endif
                        <div class="actions">
                            <a href="{{ route('admin.media.edit', $media->id) }}" class="btn btn-warning">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <form action="{{ route('admin.media.destroy', $media->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Media?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination Links -->
        <div class="pagination-wrapper mt-4" style="float: inline-end">
            {{ $mediaItems->links() }}
        </div>
    </div>

@endsection
