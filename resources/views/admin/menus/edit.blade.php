@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1>Edit Menu</h1>
    
    <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Title Field --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" 
                class="form-control @error('title') is-invalid @enderror" 
                value="{{ old('title', $menu->title) }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- URL Field --}}
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" name="url" id="url" 
                class="form-control @error('url') is-invalid @enderror" 
                value="{{ old('url', $menu->url) }}">
            @error('url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Parent Menu Field --}}
        <div class="mb-3">
            <label for="parent_id" class="form-label">Parent Menu</label>
            <select name="parent_id" id="parent_id" 
                class="form-select @error('parent_id') is-invalid @enderror">
                <option value="">None</option>
                @foreach ($parentMenus as $parentMenu)
                    <option value="{{ $parentMenu->id }}" 
                        {{ old('parent_id', $menu->parent_id) == $parentMenu->id ? 'selected' : '' }}>
                        {{ $parentMenu->title }}
                    </option>
                @endforeach
            </select>
            @error('parent_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Order Field --}}
        <div class="mb-3">
            <label for="order" class="form-label">Order</label>
            <input type="number" name="order" id="order" 
                class="form-control @error('order') is-invalid @enderror" 
                value="{{ old('order', $menu->order) }}">
            @error('order')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Is Active Field --}}
        <div class="mb-3">
            <label for="is_active" class="form-label">Is Active</label>
            <select name="is_active" id="is_active" 
                class="form-select @error('is_active') is-invalid @enderror">
                <option value="1" {{ old('is_active', $menu->is_active) == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('is_active', $menu->is_active) == 0 ? 'selected' : '' }}>No</option>
            </select>
            @error('is_active')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-info">Update</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
