@extends('layouts.app')
@section('content')
<h1 class="mb-4">Ajouter un famille</h1>
<form class="row g-3" action="{{route('familles.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        @error('libelle')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="libelle" class="form-label">Libelle</label>
        <input type="text" name="libelle" class="form-control" id="libelle" value="{{old('libelle')}}">
    </div>
    <div class="mb-3">
        @error('image')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="image" class="form-label">image</label>
        <input class="form-control" type="file" id="image" name="image" value="{{old('image')}}">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Ajouter famille</button>
    </div>
</form>
@endsection