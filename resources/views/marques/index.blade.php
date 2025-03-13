
@extends('layouts.app')

@section('content')
    <h1>Marques</h1>
    <a href="{{ route('marques.create') }}" class="btn btn-primary">ajoute New Marque</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marques as $marque)
                <tr>
                    <td>{{ $marque->id }}</td>
                    <td>{{ $marque->marque }}</td>
                    <td>
                        <a href="{{ route('marques.edit', $marque->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('marques.destroy', $marque->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection