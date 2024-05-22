@extends('layouts.app')

@section('content')
<h1>Crea un Nuovo Progetto</h1>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Descrizione:</label>
    <textarea name="description" id="description"></textarea>

    <button type="submit">Salva Progetto</button>
</form>
@endsection