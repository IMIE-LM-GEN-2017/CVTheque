@extends('layouts.master')

@section('content')

    <h1>Ajouter un nouveau CV</h1>
    <p class="lead">Ajoutez a la liste des CV ...</p>
    <hr>
    {!! Form::open([
        'route' => 'documents.store'
    ]) !!}

    @include('partials.alerts.errors')
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">Profil</a></li>
        <li><a data-toggle="pill" href="#menu1">Formation</a></li>
        <li><a data-toggle="pill" href="#menu2">Competences</a></li>
        <li><a data-toggle="pill" href="#menu3">Experiences</a></li>
        <li><a data-toggle="pill" href="#menu4">Langues</a></li>
        <li><a data-toggle="pill" href="#menu5">Envoyer votre CV</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>Profil</h3>
            <div class="form-group">
                {!! Form::label('nomprenom', 'Titre du CV:', ['class' => 'control-label']) !!}
                {!! Form::text('nomprenom', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Formation</h3>
            <div class="form-group">
                {!! Form::label('Formation', 'Formation:', ['class' => 'control-label']) !!}
                {!! Form::text('formation', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Experiences</h3>
            <div class="form-group">
                {!! Form::label('Metiers', 'Métiers exercé:', ['class' => 'control-label']) !!}
                {!! Form::text('Metiers', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Experiences', 'Experiences:', ['class' => 'control-label']) !!}
                {!! Form::text('experiences', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>Compétences</h3>
            <div class="form-group">
                {!! Form::label('compétences', 'Compétences:', ['class' => 'control-label']) !!}
                {!! Form::text('compétences', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div id="menu4" class="tab-pane fade">
            <h3>Langues</h3>
            <div class="form-group">
                {!! Form::label('Langue', 'Langues:', ['class' => 'control-label']) !!}
                {!! Form::text('langues', null, ['class' => 'form-control']) !!}
            </div>
        </div>



        <div id="menu5" class="tab-pane fade">
            <h3>CV</h3>
            <div class="form-group">
                {{ Form::open(array('url'=>'form-submit','files'=>true)) }}

                {{ Form::label('file','Votre cv en format .PDF',array('id'=>'','class'=>'')) }}
                {{ Form::file('file','',array('id'=>'','class'=>'')) }}
            </div>

        </div>





    {!! Form::submit('Créée un nouveau CV', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop
