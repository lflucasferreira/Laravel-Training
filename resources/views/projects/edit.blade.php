@extends('layout')

@section('title', 'Projetos - Editar')

@section('content')

    <h1>Editar Projeto</h1>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" rows="3" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Projeto</button>
    </form>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Excluir Projeto</button>
    </form>

@endsection