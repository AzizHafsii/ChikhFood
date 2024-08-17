<?php

namespace App\Http\Controllers;

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
        return view('admin.reservations.index'); // Ensure this view exists
    }

    public function reclamations()
    {
        return view('admin.reclamations.index'); // Ensure this view exists
    }
}