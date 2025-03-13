<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeReglement;

class ModeReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modeReglements = ModeReglement::all();
        return view('mode_reglements.index', compact('modeReglements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mode_reglements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'mode_reglements' => 'required|string|max:255', 
        ]);
        ModeReglement::create($request->all());
        // Redirect with success message
        return redirect()->route('mode_reglements.index')->with('success', 'ModeReglement created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $modeReglement = ModeReglement::findOrFail($id);
        return view('mode_reglements.show', compact('modeReglement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $modeReglement = ModeReglement::findOrFail($id);
        return view('mode_reglements.edit', compact('modeReglement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the input
        $request->validate([
            'mode_reglements' => 'required|string|max:255', // Validate the 'mode_reglements' field
        ]);

        // Find the mode_reglement by ID and update it
        $modeReglement = ModeReglement::findOrFail($id);
        $modeReglement->update($request->all());

        // Redirect with success message
        return redirect()->route('mode_reglements.index')->with('success', 'ModeReglement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the mode_reglement by ID and delete it
        $modeReglement = ModeReglement::findOrFail($id);
        $modeReglement->delete();

        // Redirect with success message
        return redirect()->route('mode_reglements.index')->with('success', 'ModeReglement deleted successfully.');
    }
}
