<?php

use Illuminate\Database\Seeder;

class DetalleRecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalle_recetas')->insert([
            'id' => 1,
        	'catidad' => '1',
        	'dosis' => 'cada 8 horas',
        	'indicaciones' => 'via oral',
        	'id_receta' => '1',
        	'id_medicamento' => '1',
        ]);
        DB::table('detalle_recetas')->insert([
            'id' => 2,
        	'catidad' => '2',
        	'dosis' => 'cada 12 horas',
        	'indicaciones' => 'via oral',
        	'id_receta' => '1',
        	'id_medicamento' => '2',
        ]);
    }
}
