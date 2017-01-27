<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <title>PublicaSalta - Anuncios Gratis</title>
  </head>
  <body>
    <div class="container">
      @if($currentUser)
        Hola {{$currentUser->name}},
        <a href="{{route ("auth_destroy_path")}}">Salir</a>
      @else
        <a href="{{route("auth_show_path")}}">Iniciar Sesión</a>
      @endif    
    @yield("content")
    </div>
  </body>
</html>
