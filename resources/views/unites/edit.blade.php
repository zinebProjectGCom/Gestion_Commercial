
@extends('layouts.app')

@section('content')
    <h1>Edit Unite</h1>
    <form action="{{ route('unites.update', $unite->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="unite">Unite</label>
            <input type="text" name="unite" id="unite" class="form-control" value="{{ $unite->unite }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection