@extends('layouts.default')

@section('content')
  <h1>{{$ad->title}}</h1>
  <p>
    {{$ad->content}}
  </p>
  <p><a href="/">Regresar</a> | <a href="{{route("ad_edit_path",$ad->id)}}">Editar</a> </p>
@stop
