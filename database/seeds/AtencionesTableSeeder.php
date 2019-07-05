<?php

use Illuminate\Database\Seeder;

class AtencionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atencions')->insert([
            'nombre' => 'Cristobal Carrion',
            'descripcion' => 'Revision anual',
            'persona_id' => 1,
            'recursoshumano_id' => 1,
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        
        DB::table('atencions')->insert([
            'nombre' => 'Valentina Villegas',
            'descripcion' => 'Sumbido en el oido derecho',
            'persona_id' => 2,
            'recursoshumano_id' => 5,
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
    }
}
