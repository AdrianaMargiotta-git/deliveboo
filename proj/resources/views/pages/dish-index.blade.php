@extends('layouts.main-layout')

@section('contenuto-pagina')

 @foreach ($dishes as $dish)

   {{ $dish -> name}}
   {{ $dish -> ingredients}}
   {{ $dish -> price}}
   {{ $dish -> visible}}

   <br><br>


 @endforeach

@endsection
