@extends('layouts.app')

@section('content')
    <div class="background-image">
        <div class="overlay">
            <div class="container text-center">
                <h1 class="display-4 text-white">Welcome to El Chikh Food</h1>
                <p class="lead text-white">Experience the best cuisine in town</p>
                <a href="{{ route('menu.index') }}" class="btn btn-primary btn-lg">View Menu</a>
            </div>
        </div>
    </div>
@endsection

<style>
    .background-image {
        background: url('https://img.freepik.com/free-photo/top-view-arrangement-with-food-wooden-background_23-2148308806.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        position: relative;
    }

    .overlay {
        background: rgba(0, 0, 0, 0.5);
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>