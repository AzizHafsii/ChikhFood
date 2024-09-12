<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function index()
    {
        // Fetch all menu items and group by category
        $menuItems = MenuItem::all()->groupBy('category');
        return view('menu.index', compact('menuItems'));
    }
    

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        MenuItem::create($validatedData);

        return redirect()->route('menu.index')->with('success', 'Menu item added successfully!');
    }
}