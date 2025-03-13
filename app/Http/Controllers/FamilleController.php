<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilleRequest;
use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles=Famille::query()->paginate(10);
        return view("familles.index",compact("familles"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("familles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FamilleRequest $request)
    {
        $formFields=$request->validated();
        
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('familles','public');
        }
        Famille::create($formFields);
        return redirect()->route('familles.index')->with('success', 'Article ajouter successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        //
        return view('familles.edit', compact('famille'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FamilleRequest $request, Famille $famille)
    {
        // dd($request);
        $formFields=$request->validated();
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('familles','public');
        }
        $famille->update($formFields);
        return redirect()->route('familles.index')->with('success', 'famille updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        //
        $famille->delete();
        return redirect()->route('familles.index')->with('success', 'famille deleted successfully.');
    }
}
