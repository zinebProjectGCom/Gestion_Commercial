<?php

namespace App\Http\Controllers;

use App\Models\ModeRegelement;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ModeReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modes = ModeRegelement::all();
        return view('modes.index', compact('modes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['mode_reglements' =>'required|string|max:255',]);
        ModeRegelement::create($request->all());
        return redirect()->with('success', 'Mode de réglement crée avec succés.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModeRegelement $mode)
    {
        return view('modes.show', compact('mode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModeRegelement $mode)
    {
        return view('modes.edit', compact('mode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModeRegelement $mode)
    {
        $request->validate(['mode_reglements' => 'required|string|max:255',]);
        $mode->update($request->all());
        return redirect()->route('modes.index')->with('success', 'Mode de réglement mis à jour avec succés.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModeRegelement $mode)
    {
        $mode->delete();
        return redirect()->route('modes.index')->with('succes', 'Modes de réglement supprimé avec succés.');
    }
}
