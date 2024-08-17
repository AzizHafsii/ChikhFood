@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2>Menu Management</h2>
            <a href="{{ route('admin.menu.create') }}" class="btn btn-primary mb-3">Add New Menu Item</a>

            <!-- Display menu items -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menuItems as $menuItem)
                        <tr>
                            <td>{{ $menuItem->name }}</td>
                            <td>{{ $menuItem->description }}</td>
                            <td>{{ $menuItem->price }}</td>
                            <td>
                                @if($menuItem->image)
                                    <img src="{{ asset('images/'.$menuItem->image) }}" alt="{{ $menuItem->name }}" width="50">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.menu.edit', $menuItem->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.menu.destroy', $menuItem->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection