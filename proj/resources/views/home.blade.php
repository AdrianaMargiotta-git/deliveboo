@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            </div>
            <div class="card">

              <div class="card-header">
                <h1>Benvenuto {{ $user -> name}}</h1>
                <p>Qui trovi i tuoi dati di registrazione</p>
                <ul class="card-body">
                  <li>Name:{{ $user -> name }}</li>
                  <li>Address:{{ $user -> indirizzo }}</li>
                  <li>Mail:{{ $user -> email }}</li>
                  <li>Piva:{{ $user -> piva }}</li>

                  <a href="{{ route('dish-create')}}">Crea nuovo piatto</a>

                  <br><br>
                  @foreach ($user -> typologies as $typology)
                     <li>{{ $typology -> type}}</li>
                  @endforeach
                </ul>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
