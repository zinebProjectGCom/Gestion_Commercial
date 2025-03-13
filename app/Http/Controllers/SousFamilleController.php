<?php

namespace App\Http\Controllers;

use App\Http\Requests\SousFamilleRequest;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class SousFamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sousFamilles = SousFamille::query()->paginate(10);

        return view('sousFamilles.index', compact('sousFamilles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("sousFamilles.create");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SousFamilleRequest $request)
    {
        $formFields=$request->validated();
        
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('sousFamilles','public');
        }
        SousFamille::create($formFields);
        return redirect()->route('sousFamilles.index')->with('success', 'Article ajouter successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SousFamille $sousFamille)
    {
        return view('sousFamilles.edit', compact('sousFamille'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SousFamilleRequest $request, SousFamille $sousFamille)
    {
        $formFields=$request->validated();
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('sousFamilles','public');
        }
        $sousFamille->update($formFields);
        return redirect()->route('sousFamilles.index')->with('success', 'famille updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SousFamille $sousFamille)
    {
        $sousFamille->delete();
        return redirect()->route('sousFamilles.index')->with('success', 'famille deleted successfully.');
    }
}
