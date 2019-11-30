<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dresseur extends Model
{
    protected $table = 'dresseurs';

    public function pokemons() {
    	return $this->hasManyThrough(
    		Pokemon::class, 
    		DetientPokemon::class,
    		'dresseur_id', 
    		'id',
    		'id', 
    		'pokemon_id'
    	);
    }
}
