<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV'THEQUE</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ URL::asset('./css/style.css') }}"/>


    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.js"></script>

</head>
<body>


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


@yield('content')

@yield('footer')





