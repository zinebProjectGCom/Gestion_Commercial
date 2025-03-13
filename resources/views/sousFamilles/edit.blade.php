@extends('layouts.app')
@php
$familles=\App\Models\Famille::all();
@endphp
@section('content')

<h1 class="mb-4">modifier un Sous famille</h1>
<form class="row g-3" action="{{route('sousFamilles.update',$sousFamille)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        @error('libelle')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="libelle" class="form-label">Libelle</label>
        <input type="text" name="libelle" class="form-control" id="libelle" value="{{old('libelle',$sousFamille->libelle)}}">
    </div>
    <div class="mb-3">
        @error('famille_id')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="famille_id" class="form-label">Famille</label>
        <select class="form-control" id="famille_id" name="famille_id" value="{{old('famille_id')}}">
            <option value="">Select un famille</option>

            @foreach($familles as $famille)
            <option value="{{$famille->id}}" {{$sousFamille->famille_id==$famille->id?"selected":""}}>{{$famille->libelle}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        @error('image')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="image" class="form-label">image</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Ajouter Sous famille</button>
    </div>
</form>
@endsection