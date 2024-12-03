@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Intake</h1>
    
    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.intake') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by Name or Email">
            </div>
            <div class="col-md-3">
                <input type="date" name="date" value="{{ request('date') }}" class="form-control">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-info">Filter</button>
                <a href="{{ route('admin.intake') }}" class="btn btn-secondary">Reset Filter</a>
            </div>
        </div>
    </form>
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Intake List</h5>
        </div>
        <div class="card-body">
            <!-- Intake Table -->
            <table class="table table-hover align-middle">
                <thead class="table-info text-center">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($intake as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->full_name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->dob }}</td>
                            <td>{{ $data->age }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->city_state_zip }}</td>
                            <td>{{ $data->created_at->format('Y-m-d H:i:s') }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.intake-detail', ['id' => 1]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $intake->links() }}
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
    <!-- Optionally add any JS scripts here for interactions -->
@endsection
