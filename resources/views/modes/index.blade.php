@extends('layouts.app')

@section('content')
    <h1>Modes de Règlement</h1>
    <a href="{{ route('modes.create') }}" class="btn btn-success">Ajouter un mode de règlement</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mode de Règlement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modes as $mode)
                <tr>
                    <td>{{ $mode->a_id }}</td>
                    <td>{{ $mode->mode_reglements }}</td>
                    <td>
                        <a href="{{ route('modes.show', $mode->a_id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('modes.edit', $mode->a_id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('modes.destroy', $mode->a_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection