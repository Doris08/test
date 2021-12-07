<?php

use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'id' => 1,
        	'nombres' => 'Katherine Vanessa',
        	'apellidos' => 'Aquino Alas',
        	'fecha_nacimiento' => '1993/12/07',
        ]);
        DB::table('pacientes')->insert([
            'id' => 2,
        	'nombres' => 'Carlos Juan',
        	'apellidos' => 'Gomez Martinez',
        	'fecha_nacimiento' => '1994/01/05',
        ]);

    }
}
