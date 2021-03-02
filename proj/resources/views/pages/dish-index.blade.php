@extends('layouts.main-layout')

@section('contenuto-pagina')

  @foreach ($user -> dishes as $dish)
  <li>{{$dish -> name}}
    <a href="{{route('dish-edit', $dish->id)}}"><i class="fas fa-pencil-alt"></i></a>
    <a href="{{route('dish-delete', $dish->id)}}"><i class="fas fa-trash"></i></a>
  </li>
  @endforeach

  <a href="{{route('dish-create')}}">Crea un nuovo piatto</a>
  <a href="{{route('home')}}">Torna alla home</a>

@endsection
