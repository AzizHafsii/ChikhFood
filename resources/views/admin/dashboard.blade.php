@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action active">
                    Dashboard
                </a>
                <a href="{{ route('admin.menu.index') }}" class="list-group-item list-group-item-action">Menu Edit</a>
                <a href="{{ route('admin.reservations') }}" class="list-group-item list-group-item-action">Reservation Check</a>
                <a href="{{ route('admin.reclamations') }}" class="list-group-item list-group-item-action">Reclamation Check</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <h5>Welcome, {{ Auth::user()->name }}!</h5>
                    <p>Use the sidebar to navigate through the admin panel.</p>

                    <!-- Example Widgets -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">Menu Items</div>
                                <div class="card-body">
                                    <h5 class="card-title">42 Items</h5>
                                    <p class="card-text">Manage your menu items here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Reservations</div>
                                <div class="card-body">
                                    <h5 class="card-title">23 Reservations</h5>
                                    <p class="card-text">Check and manage reservations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-header">Reclamations</div>
                                <div class="card-body">
                                    <h5 class="card-title">5 Pending</h5>
                                    <p class="card-text">Handle customer reclamations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Example Widgets -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection