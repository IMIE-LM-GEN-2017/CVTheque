@extends('layouts.master')

@section('content')

<h1>Editing "{{ $document->company }}"</h1>
<p class="lead">Editer et sauvegarder le CV, ou <a href="{{ route('documents.index') }}">retournez a la liste ...</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($document, [
    'method' => 'PATCH',
    'route' => ['documents.update', $document->id]
]) !!}

<div class="form-group">
    {!! Form::label('company', 'Titre du CV:', ['class' => 'control-label']) !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('owner', 'Nom de l\'apprenant:', ['class' => 'control-label']) !!}
    {!! Form::text('owner', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update document', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
