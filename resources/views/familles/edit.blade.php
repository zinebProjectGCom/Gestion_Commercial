@extends('layouts.app')
@section('content')
<h1 class="mb-4">Modifier un famille</h1>
<form class="row g-3" action="{{route('familles.update',$famille)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        @error('libelle')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="libelle" class="form-label">Libelle</label>
        <input type="text" name="libelle" class="form-control" id="libelle" value="{{old('libelle',$famille->libelle)}}">
    </div>
    <div class="mb-3">
        <div class="image">
            image is :
            <img src="/storage/{{$famille->image}}" width="80px" alt="">
        </div>
        @error('image')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="image" class="form-label">image</label>
        <input class="form-control" type="file" id="image" name="image" >    
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">modifier famille</button>
    </div>
</form>
@endsection