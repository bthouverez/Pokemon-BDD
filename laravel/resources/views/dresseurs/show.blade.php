@extends('layout')

@section('title', 'Un beau dresseur')

@section('main')
<main>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $dresseur->id }}</h5>
    <p class="card-text">{{ $dresseur->nom }}</p>
    <a href="/dresseurs" class="btn btn-primary">Retour</a>
  </div>
</div>
</main>
@endsection