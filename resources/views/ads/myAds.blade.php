@extends("layouts.default")

@section("content")
  <h1>Mis Anuncios</h1>
      @foreach ($my_ads as $ads)
        <a href="{{route("ad_show_path",$ads->id)}}">{{$ads->title}}</a>
        <br>
        {{$ads->content}}<br>
      @endforeach

@stop
