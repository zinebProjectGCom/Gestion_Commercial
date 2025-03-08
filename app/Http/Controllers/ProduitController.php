<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=Produit::query()->paginate(10);
        return view("produits.index",compact("produits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produits.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProduitRequest $request)
    {
        $formFields=$request->validated();
        
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('produits','public');
        }
        Produit::create($formFields);
        return redirect()->route('produits.index')->with('success', 'Article ajouter successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        // dd($produit);
        return view('produits.edit', compact('produit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProduitRequest $request, Produit $produit)
    {
        $formFields=$request->validated();
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('produits','public');
        }
        $produit->update($formFields);
        return redirect()->route('produits.index')->with('success', 'famille updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'famille deleted successfully.');
    }
}
