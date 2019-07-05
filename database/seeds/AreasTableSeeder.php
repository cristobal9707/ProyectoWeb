<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'nombre' => 'Box Matrona',
            'descripcion' => 'Responsable de brindar a las mujeres el soporte, cuidado y asesoramiento necesarios durante el embarazo, parto y el puerperio, de dirigir nacimientos bajo su propia responsabilidad y de proporcionar cuidados al recién nacido y al lactante.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box Psicologia',
            'descripcion' => 'Ayudan a una gran variedad de pacientes y pueden darles tratamiento a numerosos tipos de problemas. Algunas personas consultan a un psicólogo porque se han sentido deprimidas, enojadas o  ansiosas por largo tiempo.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box de Ginecologica',
            'descripcion' => 'Son los especialistas que atienden las cuestiones vinculadas al útero, la vagina y los ovarios. La ginecología permite el diagnóstico y tratamiento de enfermedades como el cáncer, el prolapso, la amenorrea, la dismenorrea, la menorragia y la infertilidad.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box Odontologicos',
            'descripcion' => 'Encargado de la salud oral. No solo se centra en los dientes, sino también en los diversos órganos que componen la cavidad oral. Además del diagnóstico y el tratamiento de enfermedades',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box Vacunatorio',
            'descripcion' => 'Lugar de Administración de Vacunas
            correspondientes al Programa Nacional de Inmunizaciones. ',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box Toma de Muestras',
            'descripcion' => 'Lugar de toma de Exámenes
            Sanguíneos y recepción de muestras urinarias, de deposiciones y
            expectoración. ',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box Procedimientos',
            'descripcion' => 'Destinados a efectuar procedimientos de salud, de diagnóstico o terapéuticos, en pacientes
            ambulatorios, y que no requieren de hospitalización.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box de reanimacion',
            'descripcion' => 'En el box de reanimación o en la unidad de paciente crítico es un lugar donde se estabilizan pacientes que se encuentran en estado crítico de salud y/o con riesgo vital, su principal función es estabilizar de forma rapida los signos vitales y el inicio oportuno y precoz del tratamiento que sea más adecuado para un paciente.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Box Apoyo',
            'descripcion' => 'Inyecciones, curaciones y toma de muestras.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Sala IRA',
            'descripcion' => 'Lugar destinado a la atención Kinésica Infantil.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Sala ERA',
            'descripcion' => 'Lugar destinado a la atención Kinésica Adulta',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Sala Estimulacion',
            'descripcion' => 'Lugar destinado a la Estimulación
            Psicomotriz de los niños con Déficit o Rezago en el Desarrollo
            Psicomotor.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Sala Esterilizacion',
            'descripcion' => 'Lugar destinado a la recepción de material
            sucio, contaminado, su lavado, desinfección y esterilización para su
            posterior entrega a las unidades de trabajo.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Sala de Rehabilitacion',
            'descripcion' => 'Se encarga de facilitar la integración de las personas con discapacidades y sus familias en el proceso de rehabilitación junto con los aspectos de prevención y promoción de la salud, adecuados a la realidad local y fortalecida por apoyos extranjeros y nacionales.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Bodega de leche',
            'descripcion' => 'Los productos entregados corresponden a las necesidades de los beneficiarios según su edad. Es así como para los niños hay leche especial para prematuro, lactante mayor; y alimento para el desnutrido. La embarazada también recibe leche y  el adulto mayor un producto lácteo y  crema de los años dorados.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Estacion de Enfermeria',
            'descripcion' => 'Sala de ciertos establecimientos donde se instala a un enfermo o se hacen las primeras curas a un herido o lesionado.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Urgencia',
            'descripcion' => 'Se entiende por urgencia o emergencia vital toda condición clínica que implique riesgo de muerte o de secuela funcional grave, la atención de urgencia o emergencia vital ante un hecho de tal envergadura, debe ser inmediata e impostergable.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Farmacia',
            'descripcion' => 'Se encargan de dispensar todos los medicamentos indicados por los diversos profesionales del establecimiento.',
            'created_at' => '2019-06-25 00:00:00',
            'updated_at' => '2019-06-25 00:00:00',
        ]);
    }
}
