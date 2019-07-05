<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Titular',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Pareja',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Hijo(a)',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Nieto(a)',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Hermano(a)',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Padre',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Madre',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Abuelo(a)',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Otro',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
    }
}
