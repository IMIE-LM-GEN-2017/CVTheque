@extends('layouts.master')

@section('content')

<h1>Editer "{{ $task->title }}"</h1>
<p class="lead">Modifiez et enregistrez cette tâche ci-dessous, ou <a href="{{ route('tasks.index') }}">Revenir à la liste des taches.</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Titre:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Enregistrer les modification', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
