<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etat;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etats = Etat::all();
        return view('etats.index', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'etat' => 'required|string|max:255',
        ]); 
        Etat::create($request->all());
        return redirect()->route('etats.index')->with('success', 'État créé avec succès.');
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etat=Etat::find($id);
        if(!$etat){
            return redirect()->route('etats.index')->with('error','Etat non trouvé.');
        }
        return view('etats.show', compact('etat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etat $etat)
    {
       
        return view('etats.edit', compact('etat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'etat' => 'required|string|max:255',
        ]);
        
        $etat=Etat::findOrFail($id);
        $etat->update([
            'etat' =>$request->etat,
        ]);
        return redirect()->route('etats.index')->with('success','Etat modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etat $etat)
    {
        $etat->delete();
        return redirect()->route('etats.index')->with('success', 'État supprimé avec succès.');
    }
}
