@extends('layouts.app')

@section('content')
    <h1 class="my-4">Détails de l'état</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID : {{ $etat->id }}</h5>
            <p class="card-text">nom : {{ $etat->etat }}</p>
            <a href="{{ route('etats.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
    </div>
@endsection
