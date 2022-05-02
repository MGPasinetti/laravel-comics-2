@extends('layouts.default')

@section('title', $name)

@section('content')

<section class="single-serie">
   <img class="img-hero" src="images/jumbotron.jpg" alt="">

   <div class="bkg-blue">
      <div class="container-centered">
         <img src="{{ $serie['thumb'] }}" alt="{{ $serie['name'] }}">
      </div>
   </div>

   <div class="container-centered">
      <h1>{{ $serie['name'] }}</h1>
      <p>{!! $serie['type'] !!}</p>
   </div>

</section>
@endsection
