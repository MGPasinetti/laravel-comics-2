@extends('layouts.default')

@section('title', 'Comics')

@section('css')
   <link href="{{ asset('/app.scss') }}" />
@stop

@section('content')
   <main>
      <img src="images/jumbotron.jpg" alt="">
      {{-- <div class="container">
            <CardSerie
               v-for="serie in series"
               :key="serie.name"
               :serie-thumb="serie.thumb"
               :serie-name="serie.name"
            />
      </div> --}}
   </main>
@stop
