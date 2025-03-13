@extends('layouts.app')

@section('content')
    <h1 class="my-4">Éditer l'état</h1>

    <form action="{{ route('etats.update', $etat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="etat" class="form-label">Nom de l'état</label>
            <input type="text" class="form-control" id="etat" name="etat" value="{{ $etat->etat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('etats.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection