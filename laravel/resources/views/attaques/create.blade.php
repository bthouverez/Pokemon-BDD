@extends('layout')

@section('title', 'Créer une attaque')

@section('main')
<main>
	<form method="post" action="/attaques">
		@csrf
		<div class="form-group">
			<label for="libelle">Libelle</label>
			<input type="text" class="form-control" id="libelle" name="libelle">
		</div>
		<div class="form-group">
			<label for="pp">PP</label>
			<input type="text" class="form-control" id="pp" name="pp">
		</div>
		<div class="form-group">
			<label for="puissance">Puissance</label>
			<input type="text" class="form-control" id="puissance" name="puissance">
		</div>
		<div class="form-group">
			<label for="precision">Precision</label>
			<input type="text" class="form-control" id="precision" name="precision">
		</div>
		<div class="form-group">
			<label for="type">Type</label>
			<select class="form-control" id="type" name="type_id">
				@foreach($types as $t)
				<option value="{{ $t->id }}">{{ $t->libelle }}</option>
				@endforeach
			</select>
		</div>
  		<button type="submit" class="btn btn-primary">Créer</button>
	</form>
</main>
@endsection