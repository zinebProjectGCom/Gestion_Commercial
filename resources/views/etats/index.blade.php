@extends('layouts.app')

@section('content')
    <h1 class="my-4">Liste des États</h1>
    <a href="{{ route('etats.create') }}" class="btn btn-success mb-3">Créer un nouvel état</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etats as $etat)
                <tr>
                    <td>{{ $etat->id }}</td>
                    <td>{{ $etat->etat }}</td>
                    <td>
                        <a href="{{ route('etats.show', $etat) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('etats.edit', $etat->id ) }}" class="btn btn-warning btn-sm">Éditer</a>
                        <form action="{{ route('etats.destroy', $etat) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet état ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection