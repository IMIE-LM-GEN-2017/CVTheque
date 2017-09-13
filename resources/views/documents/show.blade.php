@extends('layouts.master')

@section('content')

<div class="ui cards">
  <div class="ui fluid card">
    <div class="content">
      <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
      <div class="header">{{$document->Metiers}}</div>
      <div class="meta">Date : {{$document->created_at}} </div>
      <div class="description">{{$document->nomprenom}}<hr> </div>
      <div class="description"><i class="add to calendar icon"></i>{{$document->formation}}<hr> </div>
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
