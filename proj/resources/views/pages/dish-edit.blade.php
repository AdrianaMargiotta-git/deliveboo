@extends('layouts.main-layout')

@section('contenuto-pagina')

  <form class="" action="{{ route('dish-update', $dish -> id)}}" method="post">
    @csrf
    @method('post')

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $dish -> name}}">
    <label for="ingredients">Ingredients</label>
    <input type="text" name="ingredients" value="{{ $dish -> ingredients}}">
    <label for="price">Price</label>
    <input type="text" name="price" value="{{ $dish -> price}}">
    <label for="visible">Visible</label>

    <input  checked  type="radio" name="visible"
      @if ($dish -> visible == 1)
       checked
     @endif value="1">
    <input type="radio" name="visible"
     @if ($dish -> visible == 0)
         checked
     @endif value="0">

    <input type="submit" name="" value="salva">

  </form>

@endsection
