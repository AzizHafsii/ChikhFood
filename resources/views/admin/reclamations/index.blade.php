@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Reclamations</h2>

        @if ($reclamations->isEmpty())
            <div class="alert alert-info">No reclamations found.</div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reclamations as $reclamation)
                        <tr>
                            <td>{{ $reclamation->name }}</td>
                            <td>{{ $reclamation->email }}</td>
                            <td>{{ $reclamation->phone }}</td>
                            <td>{{ $reclamation->message }}</td>
                            <td>{{ $reclamation->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection