@extends('layouts.app')

@section('content')
    <h1>Ajouter un Mode de Règlement</h1>
    <form action="{{ route('modes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="mode_reglements">Mode de Règlement</label>
            <input type="text" name="mode_reglements" id="mode_reglements" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
@endsection