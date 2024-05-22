@extends('layouts.app')

@section('content')
<h1>Dettaglio del Progetto: {{ $project->name }}</h1>

<p>Descrizione: {{ $project->description }}</p>


@endsection