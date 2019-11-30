<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public function attaques() {
    	return $this->hasMany(Attaque::class);
    }

    public function pokemons() {
    	return $this->hasManyThrough(
    		Pokemon::class, 
    		EstType::class,
    		'type_id', 
    		'id',
    		'id', 
    		'pokemon_id'
    	);
    }
}
