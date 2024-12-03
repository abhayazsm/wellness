@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Contact Us  </h1>

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('admin.contacts') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by Name or Email">
            </div>
            <div class="col-md-3">
                <input type="date" name="date" value="{{ request('date') }}" class="form-control">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-info">Filter</button>
                <a href="{{ route('admin.contacts') }}" class="btn btn-secondary">Reset Filter</a>
            </div>
        </div>
    </form>

    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Contact Us List</h5>
        </div>
        <div class="card-body">
            <!-- Contact us Table -->
            <table class="table table-hover align-middle">
                <thead class="table-info text-center">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Optionally add any JS scripts here for interactions -->
@endsection
