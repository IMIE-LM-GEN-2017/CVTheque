@extends('layouts.master')

@section('content')



<h1>Liste de tache</h1>
<p class="lead">Voici la liste de toutes vos tâches. <a href="{{ route('tasks.create') }}">Ajouter un nouveau?</a></p>
<hr>



@foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Voir</a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editer</a>
    </p>
    <hr>
@endforeach

@endsection