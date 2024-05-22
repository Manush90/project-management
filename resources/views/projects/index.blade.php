@extends('layouts.app')

@section('content')
<h1>Elenco dei Progetti</h1>

<ul>
    @foreach ($projects as $project)
    <li><a href="{{ route('projects.show', $project) }}">{{ $project->name }}</a></li>
    @endforeach
</ul>
@endsection