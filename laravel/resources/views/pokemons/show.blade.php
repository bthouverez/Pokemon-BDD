@extends('layout')

@section('title', 'Un beau pokémon')

@section('main')
<main>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('imgPokemons/'.str_pad($pokemon->id, 3, '0', STR_PAD_LEFT).'.png') }}" 
  class="card-img-top" alt="{{ $pokemon->nom }}">
  <div class="card-body">
    <h5 class="card-title">{{ $pokemon->id }}</h5>
    <p class="card-text">{{ $pokemon->nom }}</p>
    <a href="/pokemons" class="btn btn-primary">Retour</a>
  </div>
</div>
</main>
@endsection