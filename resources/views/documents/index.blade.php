@extends('layouts.master')

@section('content')

<h1>Liste des CV</h1>

<a href="{{ route('documents.create') }}" class="btn btn-success"><i class="plus icon"></i>Ajouter un CV</a>


@foreach($documents as $document)
    <p>
      <div class="ui cards">
        <div class="ui fluid card">
          <div class="content">
            <div class="header">{{$document->Metiers}}</div>
            <div class="meta">Date : {{$document->created_at}} </div>
            <div class="description">{{$document->nomprenom}}<hr> </div>
            <a href="{{ route('documents.show', $document->id) }}" class="btn btn-info">Afficher CV</a>
            <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-primary">Editer CV</a>
            <a href="{{ route('documents.download', $document->id) }}" class="btn btn-success">Télécharger CV</a>
          </div>
        </div>
        </div>
?
    </p>
    <hr>
@endforeach

@stop
