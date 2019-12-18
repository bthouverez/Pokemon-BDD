@extends('hyperspace_layout')

@section('title', 'Tous les dresseurs')

@section('main')
<main>
	<table class="table">
	<tr>
		<th>Identifiant</th>
		<th>Nom</th>
		<th>Voir</th>
	</tr>
	@foreach($dresseurs as $d)
	<tr>
		<td>{{ $d->id }}</td>
		<td>{{ $d->nom }}</td>
        </td>
		<th><a href="/dresseurs/{{ $d->id}}">
			<button class="btn btn-primary">Voir</button> 
		</a></th>
	</tr>
	@endforeach
		
	</table>
</main>
@endsection