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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection