
@extends('layouts.app')

@section('content')
    <h1>Unites</h1>
    <a href="{{ route('unites.create') }}" class="btn btn-primary">Add New Unite</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Unite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unites as $unite)
                <tr>
                    <td>{{ $unite->id }}</td>
                    <td>{{ $unite->unite }}</td>
                    <td>
                        <a href="{{ route('unites.edit', $unite->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('unites.destroy', $unite->id) }}" method="POST" style="display:inline;">
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