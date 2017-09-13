<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV'THEQUE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

</head>
<body style="background-color: #f8f8f8;">


<div class="ui menu">
    <a class="active item" href="{{ url('/') }}">
        CV'Theque
    </a>


    <div class="right menu">


        @if (Auth::guest())
            <a class="item" href="{{ url ('register') }}">
                S'enregistrer
            </a>
            <a class="item" href="{{ URL::route('login') }}">Se connecter</a>
        @elseif(Auth::user()->name === 'Demo User')

        @else
            <a class="item">Bonjour, {{{ Auth::user()->name}}}</a>
            <a class="item" href="{{ route('home') }}">Acceuil</a>
            <a class="item" href="{{ route('tasks.index') }}">Tâche</a>
            <a class="item" href="{{ route('documents.index') }}">Documents</a>
            <a class="item" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i> Se deconnecter
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">{{ csrf_field() }}</form>

        @endif


    </div>
</div>

<main>
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
@endif

<div class="ui cards">
  <div class="ui fluid card">
    <div class="content">
      <img class="left floated small ui image" src="images/avatar.png">
      <div class="header">
        {{{ Auth::user()->name}}}
      </div>
      <div class="meta">
        Friends of Veronika
      </div>
      <div class="description">
        Elliot requested permission to view your contact details
      </div>
    </div>
    <div class="extra content">
      <div class="ui two buttons">
        <div class="ui basic green large button">Disponible</div>
        <div class="ui basic red large button">Indisponible</div>
      </div>
    </div>
  </div>
</div>


@yield('content')


</body>
</html>
