@extends('layout')

@section('title', 'Projects - Create')

@section('content')

    <h1>Projects Create</h1>

    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Título do Projeto">
        </div>
        <div>
            <textarea name="description" placeholder="Descrição do Projeto"></textarea>
        </div>
        <div>
            <button type="submit">Criar Projeto</button>
        </div>
    </form>

@endsection