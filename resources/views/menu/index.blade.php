@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Menu</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <!-- Search and Filter Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <form action="{{ route('menu.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search for a dish...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <form action="{{ route('menu.index') }}" method="GET">
                    <div class="input-group">
                        <select name="category" class="form-control">
                            <option value="">All Categories</option>
                            <option value="appetizers">Appetizers</option>
                            <option value="main_courses">Main Courses</option>
                            <option value="desserts">Desserts</option>
                            <option value="beverages">Beverages</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Menu Items Section -->
        <div class="row">
            @foreach($menuItems as $menuItem)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($menuItem->image)
                            <img class="card-img-top" src="{{ asset('images/' . $menuItem->image) }}" alt="{{ $menuItem->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $menuItem->name }}</h5>
                            <p class="card-text">{{ $menuItem->description }}</p>
                            <p class="card-text"><strong>${{ number_format($menuItem->price, 2) }}</strong></p>
                            @if($menuItem->is_special)
                                <span class="badge badge-danger">Special</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection