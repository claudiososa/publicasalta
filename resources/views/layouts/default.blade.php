<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <title>PublicaSalta - Anuncios Gratis</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <br>Publica Salta
        </div>
        <div class="col-md-4">
          <br>
          <a class="" href="{{route("inicio")}}">Inicio</a> &nbsp;|&nbsp;
          <a class="" href="{{route("ad_create_path")}}">Crear Anuncio</a>&nbsp;|&nbsp;
          <a class="" href="{{route("ad_my_path")}}">Mis Anuncios</a> &nbsp;
        </div>
        <div class="col-md-6">
          <br>
          @if($currentUser)
            Hola {{$currentUser->name}},
            <a href="{{route ("auth_destroy_path")}}">Salir</a>
          @else
            <a href="{{route("auth_show_path")}}">Iniciar Sesión</a>
          @endif
        </div>
      </div>

    @yield("content")
    </div>
  </body>
</html>
