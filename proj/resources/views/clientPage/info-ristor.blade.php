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

      NOME DEL PIATTO:    {{ $dish -> name }} <br>

          Prezzo Piatto: {{ $dish -> price }}$

        </p>

      @endforeach

    </div>

  </div>

@endsection
