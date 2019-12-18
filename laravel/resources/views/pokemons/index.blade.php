@extends('hyperspace_layout')

@section('title', 'Tous les pokémons')

@section('main')
<main>
	<table class="table">
	<tr>
		<th>Identifiant</th>
		<th>Nom</th>
		<th></th>
		<th>Voir</th>
	</tr>
	@foreach($pokemons as $p)
	<tr>
		<td>{{ $p->id }}</td>
		<td>{{ $p->nom }}</td>
		<td><img width="150" src="{{ asset('imgPokemons/'.str_pad($p->id, 3, '0', STR_PAD_LEFT).'.png') }}">
        </td>
		<th><a href="/pokemons/{{ $p->id}}">
			<button class="btn btn-primary">Voir</button> 
		</a></th>
	</tr>
	@endforeach
		
	</table>
</main>
@endsection