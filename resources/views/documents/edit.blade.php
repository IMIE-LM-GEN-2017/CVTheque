@extends('layouts.master')

@section('content')

<h1>Editer</h1>
<p class="lead">Editer votre CV, ou <a href="{{ route('documents.index') }}">retournez a la liste ...</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($document, [
    'method' => 'PATCH',
    'route' => ['documents.update', $document->id]
]) !!}

<div class="form-group">
    {!! Form::label('nomprenom', 'Titre du CV:', ['class' => 'control-label']) !!}
    {!! Form::text('nomprenom', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Metiers', 'Nom de l\'apprenant:', ['class' => 'control-label']) !!}
    {!! Form::text('Metiers', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('compétences', 'Compétences:', ['class' => 'control-label']) !!}
    {!! Form::text('compétences', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Formation', 'Formation:', ['class' => 'control-label']) !!}
    {!! Form::text('formation', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Experiences', 'Experiences:', ['class' => 'control-label']) !!}
    {!! Form::text('experiences', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Langue', 'Langues:', ['class' => 'control-label']) !!}
    {!! Form::text('langues', null, ['class' => 'form-control']) !!}
</div>
a
{!! Form::submit('Mettre à jour le CV', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
