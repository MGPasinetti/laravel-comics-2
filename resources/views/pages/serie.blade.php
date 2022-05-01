@extends('layouts.default')

@section('title', $name)

@section('content')

   <img class="img-hero" src="images/jumbotron.jpg" alt="">

   <h1>{{ $serie['name'] }}</h1>
   <img src="{{ $serie['thumb'] }}" alt="{{ $serie['name'] }}">
   <p>{!! $serie['type'] !!}</p>
@endsection
