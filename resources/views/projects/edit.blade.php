@extends('layouts.app')

@section('content')
<h1>Modifica Progetto: {{ $project->name }}</h1>

<form action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ $project->name }}" required>

    <label for="description">Descrizione:</label>
    <textarea name="description" id="description">{{ $project->description }}</textarea>

    <button type="submit">Salva Modifiche</button>
</form>
@endsection