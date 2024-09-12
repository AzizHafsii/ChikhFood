@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2>Add New Menu Item</h2>

            <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="" disabled selected>Select a category</option>
                        <option value="Sandwiches">Sandwiches</option>
                        <option value="Pizzas">Pizzas</option>
                        <option value="Plats">Plats</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Add Menu Item</button>
            </form>
        </div>
    </div>
</div>
@endsection