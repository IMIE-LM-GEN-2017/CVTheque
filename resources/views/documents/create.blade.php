@extends('layouts.master')

@section('content')

<h1>Ajouter un nouveau CV</h1>
<p class="lead">Ajoutez a la liste des CV ...</p>
<hr>

{!! Form::open([
    'route' => 'documents.store'
]) !!}

@include('partials.alerts.errors')

<div class="form-group">
    {!! Form::label('cv', 'Titre du CV:', ['class' => 'control-label']) !!}
    {!! Form::text('cv', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nomprenom', 'Nom de l\'apprenant:', ['class' => 'control-label']) !!}
    {!! Form::text('nomprenom', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Metiers', 'Métiers Exercé:', ['class' => 'control-label']) !!}
    {!! Form::text('Metiers', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Créée un nouveau CV', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
