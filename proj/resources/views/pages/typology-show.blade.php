<!-- estende da main-layout -->
@extends('layouts.main-layout')

<!-- contenuto home -->
@section('contenuto-pagina')

  <div class="content-show-edit">

    {{-- scheda --}}
    <div class="box">

      {{-- nome typology --}}
      <h1>{{ $typology -> type }}</h1>

      <h2>RISTORANTI:</h2>

      <br>

      @foreach ($typology -> users as $user)

        <p>

          {{-- link per visualizzare user selezionato --}}
          <a href="{{ route('user-show', $user -> id) }}">

            {{ $user -> name }}

          </a>

        </p>

      @endforeach

    </div>

  </div>

@endsection
