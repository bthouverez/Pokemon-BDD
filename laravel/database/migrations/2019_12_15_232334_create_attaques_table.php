<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttaquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attaques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            $table->integer('type_id');
            $table->integer('pp');
            $table->integer('puissance')->nullable();
            $table->integer('precision');
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
        Schema::dropIfExists('attaques');
    }
}
