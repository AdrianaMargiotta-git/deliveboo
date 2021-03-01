<!-- estende da main-layout -->
@extends('layouts.main-layout')

<!-- contenuto home -->
@section('contenuto-pagina')

  <div class="content">

    <h2>
      TYPOLOGIES
    </h2>

    @foreach ($typologies as $typology)

      <p>

        {{-- link per visualizzare typology selezionata --}}
        <a href="{{ route('typology-show', $typology -> id) }}">

          {{ $typology -> type }}

        </a>

      </p>

    @endforeach

  </div>

@endsection
