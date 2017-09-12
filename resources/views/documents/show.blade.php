@extends('layouts.master')

@section('content')

<h1>{{ $document->company }}</h1>
<p class="lead">{{ $document->owner }}</p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('documents.index') }}" class="btn btn-info">Retrournez a la liste des CV</a>
        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-primary">Editer les CV</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['documents.destroy', $document->id]
        ]) !!}
            {!! Form::submit('Supprimer ce CV?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
