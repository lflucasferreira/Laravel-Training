@extends('layout')

@section('content')

    <h1>{{ $project->title }}</h1>

    <div>
        {{ $project->description }}
        <p>
            <a href="/projects/{{ $project->id }}/edit">Editar</a>
        </p>
    </div>

    @if ($project->tasks->count())
        <div class="card-body text-white bg-dark">
            @foreach ($project->tasks as $task)
                <div>
                    <form method="post" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label class="{{ $task->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <div class="card-body text-white bg-primary">
        <form action="/projects/{{ $project->id }}/tasks" method="post">
            @csrf
            <label for="description">Nova Tarefa</label>
            <div class="form-group">
                <input autofocus class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" placeholder="Adicionar Nova Tarefa" type="text" value="{{ old('description') }}" required>
            </div>
            <div class="form-group">
                <button class="btn btn-warning" type="submit">Adicionar Tarefa</button>
             </div>

             @include('errors')
        </form>    
    </div>

@endsection