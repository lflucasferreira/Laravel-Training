@extends('layout')

@section('title', 'Projetos - Criar')

@section('content')

    <h1>Criar Projeto</h1>

    <form action="/projects" method="post">
        @csrf
        <div class="form-group">
            <input autofocus class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Título do Projeto" type="text" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" placeholder="Descrição do Projeto" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Criar Projeto</button>
        </div>

        @include('errors')
    </form>

@endsection