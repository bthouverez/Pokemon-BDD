<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attaque extends Model
{
    protected $table = 'attaques';

    public function type() {
    	return $this->belongsTo(Type::class);
    }
}
