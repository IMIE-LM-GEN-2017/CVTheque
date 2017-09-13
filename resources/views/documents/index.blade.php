@extends('layouts.master')

@section('content')

<h1>Liste des CV</h1>
<p class="lead">Vous retrouverez tout les CV ci-dessous <a href="{{ route('documents.create') }}">En ajoutez un?</a></p>
<hr>

@foreach($documents as $document)
    <h3>{{ $document->company }}</h3>
    <p>{{ $document->owner}}</p>
    <p>
        <a href="{{ route('documents.show', $document->id) }}" class="btn btn-info">Afficher CV</a>
        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-primary">Editer CV</a>
        <a href="{{ route('documents.download', $document->id) }}" class="btn btn-success">Télécharger CV</a>
    </p>
    <hr>
@endforeach

@stop
