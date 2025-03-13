<!-- resources/views/mode_reglements/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Mode Reglement</h1>
    <form action="{{ route('mode_reglements.update', $modeReglement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="mode_reglements">Mode Reglement</label>
            <input type="text" name="mode_reglements" id="mode_reglements" class="form-control"
                value="{{ $modeReglement->mode_reglements }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
