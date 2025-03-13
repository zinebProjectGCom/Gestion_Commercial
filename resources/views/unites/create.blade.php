
@extends('layouts.app')

@section('content')
    <h1>Add New Unite</h1>
    <form action="{{ route('unites.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="unite">Unite</label>
            <input type="text" name="unite" id="unite" class="form-control" required>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection