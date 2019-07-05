<?php

use Illuminate\Database\Seeder;

class RecursosHumanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Medico',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Cirujano-Dentista',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Enfermera',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Trabajador Social',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Fonoaudiologia',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Matrona',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Nutricionista',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Psicologo',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('recursos_humanos')->insert([
            'estamento' => 'Kinesiologo',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

    }
}
