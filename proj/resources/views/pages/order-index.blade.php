@extends('layouts.main-layout')

@section('contenuto-pagina')

    @foreach ($user -> dishes as $dish)
        @foreach ($dish -> orders as $order)
            <li>{{$order -> name}}</li>
        @endforeach
    @endforeach

    <a href="{{route('home')}}">Torna alla home</a>

@endsection
