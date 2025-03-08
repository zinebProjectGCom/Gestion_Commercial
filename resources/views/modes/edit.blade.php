@extends('layouts.app')

@section('content')
    <h1>Modifier le Mode de Règlement</h1>
    <form action="{{ route('modes.update', $mode->a_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="mode_reglements">Mode de Règlement</label>
            <input type="text" name="mode_reglements" id="mode_reglements" class="form-control"
                value="{{ $mode->mode_reglements }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection