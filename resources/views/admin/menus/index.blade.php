@extends('layouts.admin')

@section('main-content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Menus</h1>
        <a href="{{ route('admin.menus.create') }}" class="btn btn-info">Add Menu</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">URL</th>
                    <th scope="col">Parent</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    @include('admin.menus.menu_row', ['menu' => $menu, 'level' => 0])
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

