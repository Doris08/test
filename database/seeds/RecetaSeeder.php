<?php

use Illuminate\Database\Seeder;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')->insert([
            'id' => 1,
        	'codigo' => '0001',
        	'id_est' => '1',
        	'id_paciente' => '1',
        	'id_medico' => '1',
        ]);
        DB::table('recetas')->insert([
            'id' => 2,
        	'codigo' => '0002',
        	'id_est' => '1',
        	'id_paciente' => '2',
        	'id_medico' => '2',

        ]);
    }
}
