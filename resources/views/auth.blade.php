@extends("layouts.default")

@section("content")
  <h1>Iniciar Sesión</h1>
  @include("partials.errors")
  <form class="{{route('auth_store_path')}}" action="" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" value="">
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input class="form-control" type="password" name="password">
      </div>
      <input type="submit"  class="btn btn-primary" name="" value="Iniciar">

  </form>
@stop
