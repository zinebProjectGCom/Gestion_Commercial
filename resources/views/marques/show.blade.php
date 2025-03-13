
@extends('layouts.app')

@section('content')
    <h1>Marque Details</h1>
    <p><strong>ID:</strong> {{ $marque->id }}</p>
    <p><strong>Marque:</strong> {{ $marque->marque }}</p>
    <a href="{{ route('marques.index') }}" class="btn btn-secondary">Back</a>
@endsection