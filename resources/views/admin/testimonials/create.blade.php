@extends('layouts.admin')

@section('main-content')
<h1 class="text-info">Add New Testimonial</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" rows="6" cols="50" id="message" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
            </div>
            
            <div class="mb-4">
                <button type="submit" class="btn btn-info">Create Testimonial</button>
                <a class="btn btn-danger" href="{{route('admin.testimonials.index')}}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection