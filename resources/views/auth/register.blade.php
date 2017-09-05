@extends('templates.default')

@section('title', 'Register')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="container">
        	<div class="row">
        		<div class="col-md-4 col-md-offset-4 well">
              <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Entrez Votre Nom" required value="{{ old('pseudo') }}" class="form-control" />
                @if ($errors->has('pseudo'))
                    <strong>{{ $errors->first('pseudo') }}</strong>
                @endif
              </div>
              <div class="form-group">
    						<label for="name">Email</label>
    						<input type="text" name="email" placeholder="Email" required value="{{ old('email') }}" class="form-control" />
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
    					</div>
              <div class="form-group">
    						<label for="name">Mot de Passe</label>
    						<input id="password" name="password" placeholder="Mot de Passe" required class="form-control" />
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
    					</div>
              <div class="form-group">
    						<label for="password-confirm">Confirmer Mot de Passe</label>
    						<input id="password-confirm" type="password" placeholder="Confirmation" name="password_confirmation" required class="form-control"/>
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
    					</div>

    					<div class="form-group">
                <div class="col-md-12 text-center">
    						<input type="submit" name="signup" value="S'enregistrer" class="btn btn-primary" />
                Déjà enregistrer ? <a href="{{ route('login') }}">Connecter vous ici</a>
    					</div>

          </form>


        </div>
@endsection
