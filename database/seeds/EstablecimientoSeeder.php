<?php

use Illuminate\Database\Seeder;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establecimientos')->insert([
            'id' => 1,
        	'nombre' => 'Clínica nuestra señora del Rosario',
        ]);
        DB::table('establecimientos')->insert([
            'id' => 2,
        	'nombre' => 'Clínica Asunsión',
        ]);
    }
}
