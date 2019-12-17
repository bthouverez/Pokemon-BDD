<?php

use Illuminate\Database\Seeder;

class DetientPokemonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detient_pokemons')->delete();
        
        \DB::table('detient_pokemons')->insert(array (
            0 => 
            array (
                'dresseur_id' => 2,
                'pokemon_id' => 74,
                'niveau' => 12,
            ),
            1 => 
            array (
                'dresseur_id' => 2,
                'pokemon_id' => 95,
                'niveau' => 14,
            ),
            2 => 
            array (
                'dresseur_id' => 3,
                'pokemon_id' => 120,
                'niveau' => 18,
            ),
            3 => 
            array (
                'dresseur_id' => 3,
                'pokemon_id' => 121,
                'niveau' => 21,
            ),
            4 => 
            array (
                'dresseur_id' => 4,
                'pokemon_id' => 100,
                'niveau' => 21,
            ),
            5 => 
            array (
                'dresseur_id' => 4,
                'pokemon_id' => 25,
                'niveau' => 18,
            ),
            6 => 
            array (
                'dresseur_id' => 4,
                'pokemon_id' => 26,
                'niveau' => 24,
            ),
            7 => 
            array (
                'dresseur_id' => 5,
                'pokemon_id' => 71,
                'niveau' => 29,
            ),
            8 => 
            array (
                'dresseur_id' => 5,
                'pokemon_id' => 114,
                'niveau' => 24,
            ),
            9 => 
            array (
                'dresseur_id' => 5,
                'pokemon_id' => 45,
                'niveau' => 29,
            ),
            10 => 
            array (
                'dresseur_id' => 6,
                'pokemon_id' => 109,
                'niveau' => 37,
            ),
            11 => 
            array (
                'dresseur_id' => 6,
                'pokemon_id' => 89,
                'niveau' => 39,
            ),
            12 => 
            array (
                'dresseur_id' => 6,
                'pokemon_id' => 109,
                'niveau' => 37,
            ),
            13 => 
            array (
                'dresseur_id' => 6,
                'pokemon_id' => 110,
                'niveau' => 43,
            ),
            14 => 
            array (
                'dresseur_id' => 7,
                'pokemon_id' => 64,
                'niveau' => 38,
            ),
            15 => 
            array (
                'dresseur_id' => 7,
                'pokemon_id' => 122,
                'niveau' => 37,
            ),
            16 => 
            array (
                'dresseur_id' => 7,
                'pokemon_id' => 49,
                'niveau' => 38,
            ),
            17 => 
            array (
                'dresseur_id' => 7,
                'pokemon_id' => 65,
                'niveau' => 43,
            ),
            18 => 
            array (
                'dresseur_id' => 8,
                'pokemon_id' => 58,
                'niveau' => 42,
            ),
            19 => 
            array (
                'dresseur_id' => 8,
                'pokemon_id' => 77,
                'niveau' => 40,
            ),
            20 => 
            array (
                'dresseur_id' => 8,
                'pokemon_id' => 78,
                'niveau' => 42,
            ),
            21 => 
            array (
                'dresseur_id' => 8,
                'pokemon_id' => 59,
                'niveau' => 47,
            ),
            22 => 
            array (
                'dresseur_id' => 9,
                'pokemon_id' => 111,
                'niveau' => 42,
            ),
            23 => 
            array (
                'dresseur_id' => 9,
                'pokemon_id' => 51,
                'niveau' => 42,
            ),
            24 => 
            array (
                'dresseur_id' => 9,
                'pokemon_id' => 31,
                'niveau' => 44,
            ),
            25 => 
            array (
                'dresseur_id' => 9,
                'pokemon_id' => 34,
                'niveau' => 45,
            ),
            26 => 
            array (
                'dresseur_id' => 9,
                'pokemon_id' => 112,
                'niveau' => 50,
            ),
            27 => 
            array (
                'dresseur_id' => 10,
                'pokemon_id' => 87,
                'niveau' => 54,
            ),
            28 => 
            array (
                'dresseur_id' => 10,
                'pokemon_id' => 91,
                'niveau' => 53,
            ),
            29 => 
            array (
                'dresseur_id' => 10,
                'pokemon_id' => 80,
                'niveau' => 54,
            ),
            30 => 
            array (
                'dresseur_id' => 10,
                'pokemon_id' => 124,
                'niveau' => 56,
            ),
            31 => 
            array (
                'dresseur_id' => 10,
                'pokemon_id' => 131,
                'niveau' => 56,
            ),
            32 => 
            array (
                'dresseur_id' => 11,
                'pokemon_id' => 95,
                'niveau' => 53,
            ),
            33 => 
            array (
                'dresseur_id' => 11,
                'pokemon_id' => 107,
                'niveau' => 55,
            ),
            34 => 
            array (
                'dresseur_id' => 11,
                'pokemon_id' => 106,
                'niveau' => 55,
            ),
            35 => 
            array (
                'dresseur_id' => 11,
                'pokemon_id' => 95,
                'niveau' => 56,
            ),
            36 => 
            array (
                'dresseur_id' => 11,
                'pokemon_id' => 68,
                'niveau' => 58,
            ),
            37 => 
            array (
                'dresseur_id' => 12,
                'pokemon_id' => 94,
                'niveau' => 56,
            ),
            38 => 
            array (
                'dresseur_id' => 12,
                'pokemon_id' => 42,
                'niveau' => 56,
            ),
            39 => 
            array (
                'dresseur_id' => 12,
                'pokemon_id' => 93,
                'niveau' => 55,
            ),
            40 => 
            array (
                'dresseur_id' => 12,
                'pokemon_id' => 24,
                'niveau' => 58,
            ),
            41 => 
            array (
                'dresseur_id' => 12,
                'pokemon_id' => 94,
                'niveau' => 60,
            ),
            42 => 
            array (
                'dresseur_id' => 13,
                'pokemon_id' => 130,
                'niveau' => 58,
            ),
            43 => 
            array (
                'dresseur_id' => 13,
                'pokemon_id' => 148,
                'niveau' => 56,
            ),
            44 => 
            array (
                'dresseur_id' => 13,
                'pokemon_id' => 148,
                'niveau' => 56,
            ),
            45 => 
            array (
                'dresseur_id' => 13,
                'pokemon_id' => 142,
                'niveau' => 60,
            ),
            46 => 
            array (
                'dresseur_id' => 13,
                'pokemon_id' => 149,
                'niveau' => 62,
            ),
        ));
        
        
    }
}