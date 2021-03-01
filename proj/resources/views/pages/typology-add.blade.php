@extends('layouts.main-layout')

@section('contenuto-pagina')


  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

              <h3>

                <li>{{ $error }}</li>

              </h3>

            @endforeach
        </ul>
    </div>
  @endif

  <form action="{{ route('typology-store')}}" method="post">

    @csrf
    @method('POST')

      <label for="typologies[]">Typolgies:</label>

      <br><br>
      @foreach ($typologies as $typology)

        {{ $typology -> type }}
        <input type="checkbox" name="typologies[]" value="{{ $typology -> id}}">

      @endforeach

      <input type="submit" name="" value="Salva">

  </form>

@endsection
