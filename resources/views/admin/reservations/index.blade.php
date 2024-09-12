@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Reservations List</h2>

        @if ($reservations->isEmpty())
            <div class="alert alert-info">No reservations found.</div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Number of Guests</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->number_of_guests }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td>{{ $reservation->time }}</td>
                            <td>{{ $reservation->status }}</td>
                            <td>
                                @if ($reservation->status === 'pending')
                                    <form action="{{ route('admin.reservations.confirm', $reservation->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Confirm</button>
                                    </form>
                                    <form action="{{ route('admin.reservations.decline', $reservation->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                                    </form>
                                @else
                                    <span class="badge badge-{{ $reservation->status === 'confirmed' ? 'success' : 'danger' }}">
                                        {{ ucfirst($reservation->status) }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection