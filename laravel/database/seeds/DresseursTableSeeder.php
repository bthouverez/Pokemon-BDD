<?php

use Illuminate\Database\Seeder;

class DresseursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dresseurs')->delete();
        
        \DB::table('dresseurs')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nom' => 'Pierre',
            ),
            1 => 
            array (
                'id' => 3,
                'nom' => 'Ondine',
            ),
            2 => 
            array (
                'id' => 4,
                'nom' => 'Major Bob',
            ),
            3 => 
            array (
                'id' => 5,
                'nom' => 'Erika',
            ),
            4 => 
            array (
                'id' => 6,
                'nom' => 'Koga',
            ),
            5 => 
            array (
                'id' => 7,
                'nom' => 'Morgane',
            ),
            6 => 
            array (
                'id' => 8,
                'nom' => 'Auguste',
            ),
            7 => 
            array (
                'id' => 9,
                'nom' => 'Giovanni',
            ),
            8 => 
            array (
                'id' => 10,
                'nom' => 'Olga',
            ),
            9 => 
            array (
                'id' => 11,
                'nom' => 'Aldo',
            ),
            10 => 
            array (
                'id' => 12,
                'nom' => 'Agatha',
            ),
            11 => 
            array (
                'id' => 13,
                'nom' => 'Peter',
            ),
        ));
        
        
    }
}