@extends('layouts.admin')

@section('main-content')
    <h1>Appointments</h1>

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.appointments') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by Name or Email">
            </div>
            <div class="col-md-3">
                <input type="date" name="date" value="{{ request('date') }}" class="form-control">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-info">Filter</button>
                <a href="{{ route('admin.appointments') }}" class="btn btn-secondary">Reset Filter</a>
            </div>
        </div>
    </form>

    <!-- Appointments Table -->
    <table class="table table-striped table-bordered">
        <thead>
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
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->phone}}</td>
                    <td>{{ $appointment->service}}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $appointments->links() }}
    </div>
@endsection

@section('scripts')
    <!-- Optionally add any JS scripts here for interactions -->
@endsection
