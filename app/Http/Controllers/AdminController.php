<?php

namespace App\Http\Controllers;

use App\Models\Reservation; // For reservations
use App\Models\ContactMessage; // Ensure this is included for reclamations
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Ensure this view exists
    }

    public function menu()
    {
        return redirect()->route('admin.menu.index'); // Redirect to the menu management index
    }

    public function reservations()
    {
        $reservations = Reservation::all(); // Fetch all reservations
        return view('admin.reservations.index', compact('reservations')); // Pass the reservations to the view
    }

    public function reclamations()
    {
        $reclamations = ContactMessage::all(); // Fetch all reclamations
        return view('admin.reclamations.index', compact('reclamations')); // Pass the reclamations to the view
    }

    public function confirm($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = 'confirmed';
        $reservation->save();

        return redirect()->route('admin.reservations')->with('success', 'Reservation confirmed successfully!');
    }

    public function decline($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = 'declined';
        $reservation->save();

        return redirect()->route('admin.reservations')->with('success', 'Reservation declined successfully!');
    }
}