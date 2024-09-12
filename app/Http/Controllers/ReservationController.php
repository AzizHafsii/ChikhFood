<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation.create');
    }
    public function index()
{
    $reservations = Reservation::all(); // Fetch all reservations
    return view('reservation.index', compact('reservations'));
}
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'number_of_guests' => 'required|integer|min:1',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
        ]);

        Reservation::create($validatedData);

        return redirect()->route('reservation.create')->with('success', 'Reservation made successfully!');
    }
}