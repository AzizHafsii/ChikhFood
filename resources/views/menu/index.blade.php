@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Menu</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @foreach($menuItems as $category => $items)
            <h3 class="mt-5">{{ $category }}</h3> <!-- Display category name -->
            <div class="row">
                @foreach($items as $menuItem)
                    @if($menuItem) <!-- Check if $menuItem is not null -->
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
                    @else
                        <!-- Optionally, you can handle the case where $menuItem is null -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Item not found</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection