<?php

namespace App\Http\Controllers;

use App\Models\Unite; // Import the Unite model
use Illuminate\Http\Request;

class UniteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all unites from the database
        $unites = Unite::all();
        // Pass the unites to the view
        return view('unites.index', compact('unites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create view
        return view('unites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'unite' => 'required|string|max:255', // Ensure 'unite' is required and a string
        ]);

        // Create a new Unite record in the database
            Unite::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('unites.index')->with('success', 'Unite created successfully.');
    }
    public function show(string $id)
    {
        // Find the unite by its ID
       //// $unite = Unite::findOrFail($id);
        // Pass the unite to the show view
        //return view('unites.show', compact('unite'));
        $unite = unite::findOrFail($id); 
        return view('unites.show', compact('unite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the unite by its ID
        $unite = Unite::findOrFail($id);
        // Pass the unite to the edit view
        return view('unites.edit', compact('unite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'unite' => 'required|string|max:255', // Ensure 'unite' is required and a string
        ]);

        // Find the unite by its ID
        $unite = Unite::findOrFail($id);
        // Update the unite record in the database
        $unite->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route("unites.index")->with('success', 'Unite updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    

    // Find the unite by its ID
    $unite = Unite::findOrFail($id);

    // Delete the unite record from the database
    $unite->delete();

    // Redirect to the index page with a success message
    return redirect()->route('unites.index')->with('success', 'Unite deleted successfully.');
}
    
}