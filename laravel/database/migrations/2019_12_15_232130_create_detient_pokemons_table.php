<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetientPokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detient_pokemons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dresseur_id');
            $table->integer('pokemon_id');
            $table->integer('niveau');
            $table->boolean('poche')->default('TRUE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detient_pokemons');
    }
}
