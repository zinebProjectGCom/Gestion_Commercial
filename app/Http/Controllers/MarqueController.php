<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = Marque::all();
        return view('marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marques.create'); // ✅ Correct: Return the create view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'marque' => 'required|string|max:255', // Validate the 'marque' field
        ]);

        // Create the new marque
        Marque::create([
            'marque' => $request->marque, // Insert the 'marque' field
            // 'created_at' and 'updated_at' are automatically handled by Laravel
        ]);

        // Redirect with success message
        return redirect()->route('marques.index')->with('success', 'Marque ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marque = Marque::findOrFail($id); // ✅ Correct: Fetch the marque by ID
        return view('marques.show', compact('marque')); // ✅ Correct: Return the show view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $marque = Marque::findOrFail($id); // Fetch the marque by ID
        return view('marques.edit', compact('marque')); // Return the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the input
        $request->validate([
            'marque' => 'required|string|max:255', // Validate the 'marque' field
        ]);

        // Find the marque by ID and update it
        $marque = Marque::findOrFail($id);
        $marque->update([
            'marque' => $request->marque, // Update the 'marque' field
            // 'updated_at' is automatically handled by Laravel
        ]);

        // Redirect with success message
        return redirect()->route('marques.index')->with('success', 'Marque mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the marque by ID and delete it
        $marque = Marque::findOrFail($id);
        $marque->delete();

        // Redirect with success message
        return redirect()->route('marques.index')->with('success', 'Marque supprimée avec succès.');
    }
}