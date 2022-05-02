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

         <button>load more</button>

      </div>

      <div class="dc-buy">
         <div class="container-centered">
             <ul>
                  <li>
                     <a href="#">
                        <img src="images/buy-comics-digital-comics.png" alt="">
                        digital comics
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <img src="images/buy-comics-merchandise.png" alt="">
                        dc merchandise
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <img src="images/buy-comics-subscriptions.png" alt="">
                        subscription
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <img src="images/buy-comics-shop-locator.png" alt="">
                        comic shop locator
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <img src="images/buy-dc-power-visa.svg" alt="">
                        dc power visa
                     </a>
                  </li>
             </ul>
         </div>
     </div>
   </main>
@stop
