@extends("layouts.default")

@section("content")
  <h1>Editar Anuncio</h1>
    @include("partials.errors")
  <form class="" action="{{route("ad_patch_path",$ad->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="patch">

    <label for="categoria">Categoría</label>
    <select class="form-control" name="category_id">
      @foreach ($categories as $cate)
        @if($cate->id==$ad->category_id)
          <option value="{{$cate->id}}" selected>{{$cate->name}}</option>
        @else
          <option value="{{$cate->id}}">{{$cate->name}}</option>
        @endif
      @endforeach
    </select>

    <label for="title">Título</label>
    <input type="text"  class="form-control" name="title" value="{{$ad->title}}">    

    <label for="content">Contenido</label>
    <textarea name="content" class="form-control" rows="8" cols="80">{{$ad->content}}</textarea>
    <input class="btn btn-primary" type="submit" name="" value="Guardar">
  </form>
@stop
