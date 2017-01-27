@extends("layouts.default")

@section("content")
<h1>Lista de Anuncios</h1>

<hr>
@foreach ($ads as $ad)

<h4> <a href="{{route ('ad_show_path',$ad->id)}}">{{$ad->title}}</a></h4>
<br>
{{$ad->content}}
<br>
<br>
  <p>Fecha de Creación <b>{{$ad->created_at}}</b> Creado por... <b>{{$ad->user->name}}</b> Categoría ->{{$ad->category->name}} </p>
  <hr>
@endforeach

@stop
