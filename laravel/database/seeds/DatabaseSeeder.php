<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PokemonsTableSeeder::class);
        $this->call(DresseursTableSeeder::class);
        $this->call(AttaquesTableSeeder::class);
        $this->call(DetientPokemonsTableSeeder::class);
        $this->call(EstTypeTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(EvolueEnTableSeeder::class);
    }
}
