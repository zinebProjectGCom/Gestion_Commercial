@extends('layouts.app')
@php
$sousFamilles=\App\Models\sousFamille::all();
$marques=\App\Models\Marque::all();
$unites=\App\Models\Unite::all();
@endphp
@section('content')

<h1 class="mb-4">modifier un Produit</h1>
<form class="row g-3" action="{{route('produits.update',$produit)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        @error('codebarre')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="codebarre" class="form-label">codebarre</label>
        <input type="text" name="codebarre" class="form-control" id="codebarre" value="{{old('codebarre',$produit->codebarre)}}">
    </div>
    <div class="mb-3">
        @error('designation')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="designation" class="form-label">designation</label>
        <input type="text" name="designation" class="form-control" id="designation" value="{{old('designation',$produit->designation)}}">
    </div>
    <div class="mb-3">
        @error('description')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="description" class="form-label">description</label>
        <textarea name="description" class="form-control" id="description">{{old('description',$produit->description)}}</textarea>
    </div>
    <div class="mb-3">
        @error('sous_famille_id')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="sous_famille_id" class="form-label">Sous Famille</label>
        <select class="form-control" id="sous_famille_id" name="sous_famille_id" value="{{old('sous_famille_id')}}">
            <option value="" >Select un famille</option>
            @foreach($sousFamilles as $sousFamille)
            <option value="{{$sousFamille->id}}" {{$produit->sous_famille_id==$sousFamille->id?"selected":""}}>{{$sousFamille->libelle}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        @error('marque_id')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="marque_id" class="form-label">Marque </label>
        <select class="form-control" id="marque_id" name="marque_id" value="{{old('marque_id')}}">
            <option value="" >Select un famille</option>
            @foreach($marques as $marque)
            <option value="{{$marque->id}}" {{$produit->marque_id==$marque->id?"selected":""}}>{{$marque->marque}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        @error('unite_id')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="unite_id" class="form-label">Unite</label>
        <select class="form-control" id="unite_id" name="unite_id" value="{{old('unite_id')}}">
            <option value="" >Select un famille</option>
            @foreach($unites as $unite)
            <option value="{{$unite->id}}" {{$produit->unite_id==$unite->id?"selected":""}}>{{$unite->unite}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        @error('prix_ht')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="prix_ht" class="form-label">prix_ht</label>
        <input type="text" name="prix_ht" class="form-control" id="prix_ht" value="{{old('prix_ht',$produit->prix_ht)}}">
    </div>
    <div class="mb-3">
        @error('stock')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="stock" class="form-label">stock</label>
        <input type="text" name="stock" class="form-control" id="stock" value="{{old('stock',$produit->stock)}}">
    </div>
    <div class="mb-3">
        @error('tva')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="tva" class="form-label">tva</label>
        <input type="text" name="tva" class="form-control" id="tva" value="{{old('tva',$produit->tva)}}">
    </div>
    <div class="mb-3">
        @error('image')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="image" class="form-label">image</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">modifier produit</button>
    </div>
</form>
@endsection