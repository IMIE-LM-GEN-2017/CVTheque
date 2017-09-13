@extends('layouts.master')

@section('content')

<div class="ui cards">
  <div class="ui fluid card">
    <div class="content">
      <img class="small right floated mini ui image" src="public/images/evan.png">
      <div class="header">{{$document->nomprenom}}</div>
      <div class="meta">Date : {{$document->created_at}} </div>
      <div class="description">{{$document->Metiers}}<hr> </div>
      <div class="description"><i class="large add to calendar icon"></i><b>Les Formations :</b> <br> <br>- {{$document->formation}}<hr> </div>
      <div class="description"><i class="large add to calendar icon"></i><b>Les Expériences :</b> <br> <br>- {{$document->experiences}}<hr> </div>
      <div class="description"><i class="large add to calendar icon"></i><b>Les Compétences :</b> <br> <br>- {{$document->compétences}}<hr> </div>
      <div class="description"><i class="large add to calendar icon"></i><b>Les Langues : </b> <br><br>- {{$document->langues}}<hr> </div>
    </div>
    <p></p>
    <div class="extra content">
      <div class="ui tree buttons">
        <div class="ui basic green button">Partager</div>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['documents.destroy', $document->id]
        ]) !!}
            {!! Form::submit('Supprimer ce CV?', ['class' => 'ui basic red button']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  <hr>
<div class="row">
    <div class="col-md-6">
        <a href="{{ route('documents.index') }}" class="btn btn-info">Retrournez a la liste des CV</a>

        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-primary">Editer le CV</a>
    </div>
    <div class="col-md-6 text-right">

    </div>
</div>

@stop
