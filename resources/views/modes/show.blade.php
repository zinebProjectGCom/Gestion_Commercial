@extends('layouts.app')

@section('content')
    <h1>Détails du Mode de Règlement</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID : {{ $mode->a_id }}</h5>
            <p class="card-text">Mode de Règlement : {{ $mode->mode_reglements }}</p>
        </div>
    </div>
    <a href="{{ route('modes.edit', $mode->a_id) }}" class="btn btn-primary mt-3">Modifier</a>
    <form action="{{ route('modes.destroy', $mode->a_id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3">Supprimer</button>
    </form>
@endsection