
@extends('layouts.app')

@section('content')
    <h1>Add New Marque</h1>
    <form action="{{ route('marques.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque" class="form-control" required>
        </div> 
        <br><br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection