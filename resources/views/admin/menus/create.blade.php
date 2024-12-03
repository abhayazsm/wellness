@extends('layouts.admin')

@section('main-content')
    <h1 class="text-info">Create Menu</h1>

    <form action="{{ route('admin.menus.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                {{-- Title Field --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                {{-- URL Field --}}
                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" id="url" 
                        class="form-control @error('url') is-invalid @enderror" 
                        value="{{ old('url') }}">
                    @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {{-- Parent Menu Field --}}
                <div class="mb-3">
                    <label for="parent_id" class="form-label">Parent Menu</label>
                    <select name="parent_id" id="parent_id" 
                        class="form-select @error('parent_id') is-invalid @enderror">
                        <option value="">None</option>
                        @foreach ($parentMenus as $parentMenu)
                            <option value="{{ $parentMenu->id }}" 
                                {{ old('parent_id') == $parentMenu->id ? 'selected' : '' }}>
                                {{ $parentMenu->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('parent_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                {{-- Order Field --}}
                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number" name="order" id="order" 
                        class="form-control @error('order') is-invalid @enderror" 
                        value="{{ old('order', 0) }}">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                {{-- Is Active Field --}}
                <div class="mb-3">
                    <label for="is_active" class="form-label">Is Active</label>
                    <select name="is_active" id="is_active" 
                        class="form-select @error('is_active') is-invalid @enderror">
                        <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('is_active', 1) == 0 ? 'selected' : '' }}>No</option>
                    </select>
                    @error('is_active')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-info">Save</button>
            <a href="{{ route('admin.menus.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
