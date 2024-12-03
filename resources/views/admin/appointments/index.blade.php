@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Appointments</h1>

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.appointments') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by Name or Email">
            </div>
            <div class="col-md-4">
                <input type="date" name="date" value="{{ request('date') }}" class="form-control">
            </div>
            <div class="col-md-4 d-flex">
                <button type="submit" class="btn btn-info me-2">Filter</button>
                <a href="{{ route('admin.appointments') }}" class="btn btn-secondary">Reset Filter</a>
            </div>
        </div>
    </form>
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Appointment List</h5>
        </div>
        <div class="card-body">
            <!-- Appointments Table -->
            <table class="table table-hover align-middle">
                <thead class="table-info text-center">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ $appointment->phone }}</td>
                            <td>{{ $appointment->service }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->time }}</td>
                            <td>{{ $appointment->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted">No appointments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $appointments->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Optionally add any JS scripts here for interactions -->
@endsection
