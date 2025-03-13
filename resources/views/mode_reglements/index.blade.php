<!-- resources/views/mode_reglements/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Mode Reglements</h1>
    <a href="{{ route('mode_reglements.create') }}" class="btn btn-primary">Ajouter Mode Reglement</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mode Reglement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modeReglements as $modeReglement)
                <tr>
                    <td>{{ $modeReglement->id }}</td>
                    <td>{{ $modeReglement->mode_reglements }}</td>
                    <td>
                        <a href="{{ route('mode_reglements.edit', $modeReglement->id) }}" class="btn btn-warning">modifier</a>
                        <form action="{{ route('mode_reglements.destroy', $modeReglement->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this mode reglement?')">supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
