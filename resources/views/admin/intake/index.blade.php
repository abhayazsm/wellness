@extends('layouts.admin')

@section('main-content')
    <h1>Intake</h1>
    
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

    <!-- Intake Table -->
    <table class="table table-striped table-bordered">
        <thead>
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
@endsection

@section('scripts')
    <!-- Optionally add any JS scripts here for interactions -->
@endsection
