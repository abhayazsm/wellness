@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="text-info">Modal Popup</h1>
    <a href="{{ route('admin.modals.create') }}" class="btn btn-info">Create</a>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Modal Popup List</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($modals as $modal)
                    <tr>
                        <td>{{ $modal->id }}</td>
                        <td>{{ $modal->title }}</td>
                        <td>{{ $modal->priority }}</td>
                        <td>
                            <!-- Status toggle -->
                            <form action="{{ route('admin.admin.modals.updateStatus', $modal->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <label class="switch">
                                    <input type="checkbox" name="status" onchange="this.form.submit()" {{ $modal->status == 'active' ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.modals.edit', $modal->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <form action="{{ route('admin.modals.destroy', $modal->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $modals->links() }}
        </div>
    </div>
</div>

<script>
    // Confirmation prompt before deletion
    function confirmDelete() {
        return confirm("Are you sure you want to delete this modal?");
    }
</script>

@endsection
