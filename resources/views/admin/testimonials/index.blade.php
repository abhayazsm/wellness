@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="text-info">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-info">Create Testimonial</a>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Testimonial List</h5>
    </div>
    <div class="card-body">
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Rating</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ Str::limit($testimonial->message, 50) }}</td>
                        <td>{{ $testimonial->rating }}</td>
                        <td><img src="{{ asset('storage/' . $testimonial->image) }}" width="50" alt="{{ $testimonial->name }}"></td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $testimonials->links() }}
        </div>
    </div>
</div>

<script>
    // Confirmation prompt before deletion
    function confirmDelete() {
        return confirm("Are you sure you want to delete this testimonials?");
    }
</script>

@endsection
