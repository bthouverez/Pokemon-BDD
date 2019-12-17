<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    public function types() {
    	return $this->hasManyThrough(
    		Type::class, 
    		EstType::class,
    		'pokemon_id', 
    		'id',
    		'id', 
    		'type_id'
    	);
    }

    public function dresseurs() {
    	return $this->hasManyThrough(
    		Dresseur::class, 
    		DetientPokemon::class,
    		'pokemon_id', 
    		'id',
    		'id', 
    		'dresseur_id'
    	);
    }
}
