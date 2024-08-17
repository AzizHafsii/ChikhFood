@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Menu Item</h2>
            <form action="{{ route('admin.menu.update', $menuItem->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $menuItem->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $menuItem->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $menuItem->price }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if($menuItem->image)
                        <img src="{{ asset('images/' . $menuItem->image) }}" alt="{{ $menuItem->name }}" width="100" class="mt-2">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update Item</button>
            </form>
        </div>
    </div>
</div>
@endsection