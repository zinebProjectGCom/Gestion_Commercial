@extends('layouts.app')

@section('content')
    <h1 class="my-4">Créer un nouvel état</h1>

    <form action="{{ route('etats.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="etat" class="form-label">Nom de l'état</label>
            <input type="text" class="form-control" id="etat" name="etat" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{ route('etats.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
