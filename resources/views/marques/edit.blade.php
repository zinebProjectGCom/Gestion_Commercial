
@extends('layouts.app')

@section('content')
    <h1>Edit Marque</h1>
    <form action="{{ route('marques.update', $marque->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque" class="form-control" value="{{ $marque->marque }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection