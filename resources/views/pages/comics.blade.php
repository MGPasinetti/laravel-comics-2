@extends('layouts.default')

@section('title', 'Comics')

@section('content')
   <main>
      <img class="img-hero" src="images/jumbotron.jpg" alt="">

      <div class="container-centered">
         <div class="title-section">
            current series
         </div>

         <div class="grid-series">
            @php
               $arrSeries = config('series');
            @endphp

            @foreach ($arrSeries as $serie)
               <div class="card-serie">
                  <a href="{{ route('serie', ['id' => $serie['id']]) }}">
                     <img src="{{ $serie['thumb'] }}" alt="{{ $serie['name'] }}">
                     <h5>{{ $serie['name'] }}</h5>
                  </a>
               </div>
            @endforeach
         </div>

         <button>
            load more
         </button>
      </div>
   </main>
@stop
