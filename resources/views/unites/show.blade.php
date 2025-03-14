
@extends('layouts.app')

@section('content')
    <h1>Unite Details</h1>
    <p><strong>ID:</strong> {{ $unite->id }}</p>
    <p><strong>Unite:</strong> {{ $unite->unite }}</p>
    <a href="{{ route('unites.index') }}" class="btn btn-secondary">Back</a>
@endsection