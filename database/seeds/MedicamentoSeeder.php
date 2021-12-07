<?php

use Illuminate\Database\Seeder;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicamentos')->insert([
            'id' => 1,
        	'nombre_medicamento' => 'Ranitidina',
        ]);
        DB::table('medicamentos')->insert([
            'id' => 2,
        	'nombre_medicamento' => 'Ibuprofeno',
        ]);
    }
}
