@extends('layouts.main-layout')

@section('contenuto-pagina')

  <form class="" action="{{ route('dish-store')}}" method="post">
    @csrf
    @method('post')

    <label for="name">Name</label>
    <input type="text" name="name" value="">
    <label for="ingredients">Ingredients</label>
    <input type="text" name="ingredients" value="">
    <label for="price">Price</label>
    <input type="text" name="price" value="">
    <label for="visible">Visible</label>

    <input checked type="radio" name="visible" value="1">
    <input type="radio" name="visible" value="0">

    <input type="submit" name="" value="salva">

  </form>

@endsection
