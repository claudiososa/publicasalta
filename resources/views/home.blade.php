@extends("layouts.default")

@section("content")
<h1>Lista de Anuncios</h1>
@foreach ($ads as $ad)
<h1>Título</h1>
  <a href="{{route ('ad_show_path',$ad->id)}}">{{$ad->title}}</a>
  
  <h4>Fecha de Creación</h4>{{$ad->created_at}}
  <h1>Creado por...</h1>{{$ad->user->name}}
@endforeach
@stop
