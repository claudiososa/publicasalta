@extends('layouts.default')

@section('content')
  <h1>{{$ad->title}}</h1>
  <p>
    {{$ad->content}}
  </p>
@stop
