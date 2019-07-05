<?php

use Illuminate\Database\Seeder;

class CesfamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos de prueba
        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Amanecer',
            'comuna' => 'Temuco',
            'ubicacion' => 'Garibaldi N°1280',
            'fono' => '+56 45 2557300',
            'director' => 'Sra. Veronica Caro Lagos Matrona',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        
        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Pueblo Nuevo',
            'comuna' => 'Temuco',
            'ubicacion' => 'Nahuelbuta N°2015',
            'fono' => '+56 45 2220038',
            'director' => 'Sra. Pamela Rickenberg Torrejon Matrona',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Labranza',
            'comuna' => 'Temuco',
            'ubicacion' => '1 Oriente N°0411',
            'fono' => '+56 45 2376675',
            'director' => 'Sr. Francisco Ferrada Kinesiólogo',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Pedro de Valdivia',
            'comuna' => 'Temuco',
            'ubicacion' => 'Chivilcan N°0910',
            'fono' => '+56 45 2732836',
            'director' => 'Sra. Carmen Aranguiz Fernandez Odontologa',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Santa Rosa',
            'comuna' => 'Temuco',
            'ubicacion' => 'Pircunche N°0316',
            'fono' => '+56 45 2220194',
            'director' => 'Sra. Marisa Villalobos Castillo Medico',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        
        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Villa Alegre',
            'comuna' => 'Temuco',
            'ubicacion' => 'Av. Argentina N°0820',
            'fono' => '+56 45 2365196',
            'director' => 'Sr. Hans Oppemann Soza Medico',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam El Carmen',
            'comuna' => 'Temuco',
            'ubicacion' => 'Los Compositores #0110',
            'fono' => '+56 45 2643500',
            'director' => 'Sra. Julissa Elgueta Aravena Matrona',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        
        DB::table('cesfams')->insert([
            'nombre' => 'Cesfam Monseñor Valech',
            'comuna' => 'Temuco',
            'ubicacion' => 'Camino Chol-Chol Km 10',
            'fono' => '+56 45 2251398',
            'director' => 'Sr. Ariel Lizama Contreras Matron',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        
        DB::table('cesfams')->insert([
            'nombre' => 'Cecosf El Salar',
            'comuna' => 'Temuco',
            'ubicacion' => 'Huasquinta N°01180',
            'fono' => '+56 45 2558090',
            'director' => 'Sra. Ana Obreque Guzman Matrona',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        
        DB::table('cesfams')->insert([
            'nombre' => 'Cecosf Arquenco',
            'comuna' => 'Temuco',
            'ubicacion' => 'Los Copihues N° 1486',
            'fono' => '+56 45 2558082',
            'director' => 'Sra. Madelin Hernandez Perez Enfermera',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);

        DB::table('cesfams')->insert([
            'nombre' => 'Cecosf Las Quilas',
            'comuna' => 'Temuco',
            'ubicacion' => 'Los Copihues N° 1486',
            'fono' => '+56 45 2212017',
            'director' => 'Sin informacion',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);




    }
}
