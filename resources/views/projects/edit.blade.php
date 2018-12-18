@extends('layout')

@section('title', 'Projects - Edit')

@section('content')

    <h1>Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $project->title }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
@endsection