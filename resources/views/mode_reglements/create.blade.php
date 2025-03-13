<!-- resources/views/mode_reglements/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Add New Mode Reglement</h1>
    <form action="{{ route('mode_reglements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="mode_reglements">Mode Reglement</label>
            <input type="text" name="mode_reglements" id="mode_reglements" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
