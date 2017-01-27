@extends("layouts.default")

@section("content")
  <h1>Editar Anuncio</h1>
    @include("partials.errors")
  <form class="" action="{{route("ad_patch_path",$ad->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="patch">
    <label for="title">Título</label>
    <input type="text"  class="form-control" name="title" value="{{$ad->title}}">
    <label for="content">Contenido</label>
    <textarea name="content" class="form-control" rows="8" cols="80">{{$ad->content}}</textarea>
    <input class="btn btn-primary" type="submit" name="" value="Guardar">
  </form>
@stop
