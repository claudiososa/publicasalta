@extends("layouts.default")

@section("content")
  <h1>Crear Anuncio</h1>
    @include("partials.errors")

  <form class="" action="{{route("ad_create_path")}}" method="post">
    {{csrf_field()}}
    <label for="categoria">Categoría</label>
    <select class="form-control" name="category_id">
      @foreach ($categories as $cate)
        <option value="{{$cate->id}}">{{$cate->name}}</option>
      @endforeach
    </select>
    <label for="title">Título</label>
    <input type="text"  class="form-control" name="title" value="{{old("title")}}">


    <label for="content">Contenido</label>
    <textarea name="content" class="form-control" rows="8" cols="80">{{old("content")}}</textarea>
    <input class="btn btn-primary" type="submit" name="" value="Guardar">
  </form>
@stop
