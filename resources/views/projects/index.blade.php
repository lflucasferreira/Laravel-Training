@extends('layout')

@section('title', 'Projetos')

@section('content')

    <div class="row">
        <h1>Projetos</h1>
    </div>

    @foreach ($projects as $project)
        <li>
            <a href="/projects/{{ $project->id }}">
                {{ $project->title }} (id: {{ $project->id }})
            </a>
        </li>
    @endforeach

@endsection