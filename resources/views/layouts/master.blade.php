<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CV'THEQUE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

</head>
<body style="background-color: #f8f8f8;">
<nav class="navbar navbar-default" style="background-color: black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">CV'THEQUE</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            {{-- <li><a href="{{ URL::route('register') }}">Register</a></li> --}}
            <li><a href="{{ URL::route('login') }}" style="color: #fbfbfb;">Se connecter</a></li>
        @elseif(Auth::user()->name === 'Demo User')
            <li><a href="{{ URL::route('logout') }}" style="color: #fbfbfb;">Bonjour, {{{ Auth::user()->name}}} (Cerrar sesion)</a></li>
        @else
            <li><a href="{{ route('home') }}" style="color: #fbfbfb;">Acceuil</a></li>
            <li><a href="{{ route('tasks.index') }}" style="color: #fbfbfb;">Tâche</a></li>
            <li><a href="{{ route('documents.index') }}" style="color: #fbfbfb;">Documents</a></li>
        @endif
    </div>
  </div>
</nav>

<main>
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @yield('content')
    </div>
</main>
</body>
</html>
