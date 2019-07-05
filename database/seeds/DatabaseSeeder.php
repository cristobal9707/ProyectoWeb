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
        $this->call(AreasTableSeeder::class);
        $this->call(CesfamsTableSeeder::class);
        $this->call(RecursosHumanosTableSeeder::class);
        $this->call(PersonasTableSeeder::class);
        $this->call(AtencionesTableSeeder::class);
    }
}
