@extends('layouts.master')

@section('content')

<h1>Ajouter une nouvelle Tache</h1>
<p class="lead">Ajoutez à votre liste de tâches ci-dessous.</p>
<hr>

{!! Form::open([
    'route' => 'tasks.store'
]) !!}

@include('partials.alerts.errors')

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
