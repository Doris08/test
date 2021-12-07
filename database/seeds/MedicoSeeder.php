<?php

use Illuminate\Database\Seeder;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            'id' => 1,
        	'nombres' => 'Ana María',
        	'apellidos' => 'martínez Serrano',
        	'id_est' => '1',
        ]);
        DB::table('medicos')->insert([
            'id' => 2,
        	'nombres' => 'Alfonso',
        	'apellidos' => 'Castillo Perez',
        	'id_est' => '1',
        ]);
    }
}
