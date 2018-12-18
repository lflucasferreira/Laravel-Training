@extends('layout')

@section('title', 'Projetos')

@section('content')

    <h1>Projetos</h1>

    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
@endsection