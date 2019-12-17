@extends('layout')

@section('title', 'Une belle attaque')

@section('main')
<main>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $attaque->id }}</h5>
    <p class="card-text">
    	<ul>
			<li>{{ $attaque->id }}</li>
			<li>{{ $attaque->libelle }}</li>
			<li>{{ $attaque->pp }}</li>
			<li>{{ $attaque->puissance }}</li>
			<li>{{ $attaque->precision }}</li>
			<li>{{ $attaque->type->libelle }}</li>
    	</ul>
    </p>
    <a href="/attaques" class="btn btn-primary">Retour</a>
  </div>
</div>
</main>
@endsection