@extends('layouts.admin')

@section('main-content')
<h1 class="text-info">Edit Category</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $testimonial->name }}" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="6" cols="50" class="form-control" required>{{ $testimonial->message }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ asset('storage/' . $testimonial->image) }}" width="100" alt="{{ $testimonial->name }}">
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" value="{{ $testimonial->rating }}" min="1" max="5" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-info">Update Testimonial</button>
                <a class="btn btn-danger" href="{{route('admin.testimonials.index')}}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection