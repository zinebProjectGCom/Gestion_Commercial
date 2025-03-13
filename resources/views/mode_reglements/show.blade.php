<!-- resources/views/mode_reglements/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Mode Reglement Details</h1>
    <p><strong>ID:</strong> {{ $modeReglement->id }}</p>
    <p><strong>Mode Reglement:</strong> {{ $modeReglement->mode_reglements }}</p>
    <a href="{{ route('mode_reglements.index') }}" class="btn btn-secondary">Back</a>
@endsection