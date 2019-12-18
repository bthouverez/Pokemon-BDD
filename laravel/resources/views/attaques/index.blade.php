@extends('hyperspace_layout')

@section('title', 'Toutes les attaques')

@section('main')
<main>
	<table class="table">
	<tr>
		<th>Identifiant</th>
		<th>Libellé</th>
		<th>Point pouvoir</th>
		<th>Puissance</th>
		<th>Précision</th>
		<th>Type</th>
		<th>Voir</th>
	</tr>
	@foreach($attaques as $a)
	<tr>
		<td>{{ $a->id }}</td>
		<td>{{ $a->libelle }}</td>
		<td>{{ $a->pp }}</td>
		<td>{{ $a->puissance }}</td>
		<td>{{ $a->precision }}</td>
		<td>{{ $a->type->libelle }}</td>
        </td>
		<th><a href="/attaques/{{ $a->id}}">
			<button class="btn btn-primary">Voir</button> 
		</a></th>
	</tr>
	@endforeach
		
	</table>
</main>
@endsection