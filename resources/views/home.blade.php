@extends("layouts.default")

@section("content")
<h1>Lista de Anuncios</h1>
<hr>
@foreach ($ads as $ad)
  {{$ad->title}}
  <br>
  {{$ad->content}}
  <br>
<h4> <a href="{{route ('ad_show_path',$ad->id)}}">{{$ad->title}}</a></h4>
  <p>Fecha de Creación <b>{{$ad->created_at}}</b> Creado por... <b>{{$ad->user->name}}</b></p>
  <hr>
@endforeach
@stop
