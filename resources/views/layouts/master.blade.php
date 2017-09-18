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

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">CV'Theque</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a class="item" href="{{ url ('register') }}">S'enregistrer</a></li>

                    <li><a class="item" href="{{ URL::route('login') }}">Se connecter</a></li>
                @elseif(Auth::user()->name === 'Demo User')
                @else

                    <li><a class="item" href="{{ route('home') }}">Bonjour, {{{ Auth::user()->name}}}</a></li>
                    <li><a class="item" href="{{ route('tasks.index') }}">Tâche</a></li>
                    <li><a class="item" href="{{ route('documents.index') }}">Documents</a>
                    <li><a class="item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-power-off"></i> Se deconnecter
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">{{ csrf_field() }}</form>

                @endif


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


@yield('content')

@yield('footer')





