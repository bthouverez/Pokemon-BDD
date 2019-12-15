<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'Combat',
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'Dragon',
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'Eau',
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'Electrique',
            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'Feu',
            ),
            5 => 
            array (
                'id' => 6,
                'libelle' => 'Glace',
            ),
            6 => 
            array (
                'id' => 7,
                'libelle' => 'Insecte',
            ),
            7 => 
            array (
                'id' => 8,
                'libelle' => 'Normal',
            ),
            8 => 
            array (
                'id' => 9,
                'libelle' => 'Plante',
            ),
            9 => 
            array (
                'id' => 10,
                'libelle' => 'Poison',
            ),
            10 => 
            array (
                'id' => 11,
                'libelle' => 'Psy',
            ),
            11 => 
            array (
                'id' => 12,
                'libelle' => 'Roche',
            ),
            12 => 
            array (
                'id' => 13,
                'libelle' => 'Sol',
            ),
            13 => 
            array (
                'id' => 14,
                'libelle' => 'Spectre',
            ),
            14 => 
            array (
                'id' => 15,
                'libelle' => 'Vol',
            ),
        ));
        
        
    }
}