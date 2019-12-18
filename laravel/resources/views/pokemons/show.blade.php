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
  </div>
</div>  
<br>
<p align="center">
	<a href="/pokemons/{{ $pokemon->id-1 == 0 ? $pokemon->count() : $pokemon->id-1  }}" class="btn btn-success">Précédent</a>
    <a href="/pokemons" class="btn btn-warning">Tous</a>
    <a href="/pokemons/{{ $pokemon->id+1 >= $pokemon->count() ? 1:$pokemon->id+1 }}" class="btn btn-danger">Suivant</a>
 </p> 
	
</main>
@endsection