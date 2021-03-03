<!-- estende da main-layout -->
@extends('layouts.main-layout')

<!-- contenuto home -->
@section('contenuto-pagina')

  <div class="content-show-edit">

    {{-- scheda --}}
    <div class="box">

      {{-- nome user --}}
    NOME RISTORANTE:  <h1>{{ $user -> name }}</h1>

      <h2>PIATTI:</h2>

      <br>

      @foreach ($user -> dishes as $dish)

        <p>

          {{ $dish -> name }} ({{ $dish -> price }}&#8364;)<br>

          Ingredienti: {{ $dish -> ingredients }}

          <i class="fas fa-shopping-cart"></i>

        </p>

      @endforeach

      {{-- <h2>ORDINI:</h2>

      @foreach ($user -> dishes as $dish)

        @foreach ($dish -> orders as $order)

        <p>

          ID Ordine: {{ $order -> id }} <br>

          Nome Cliente: {{ $order -> name }} {{ $order -> lastname }} <br>

          Data Ordine: {{ $order -> created_at }}

          <br>

          @php
            $dishPrice = 0;
          @endphp

          @foreach ($order -> dishes as $dish)

           @php

             $dishPrice = $dishPrice + $dish -> price;

           @endphp

             {{ $dish -> price}} +

          @endforeach
           prezzo da pagare: {{ $dishPrice }}
       </p>

        ----------------------------------

        @endforeach

      @endforeach --}}

    </div>

  </div>

@endsection
