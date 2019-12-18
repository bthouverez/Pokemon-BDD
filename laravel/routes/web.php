<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('pokemons', 'PokemonsController');
Route::resource('dresseurs', 'DresseursController');
Route::resource('attaques', 'AttaquesController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
	return view('hyperspace_layout');
});