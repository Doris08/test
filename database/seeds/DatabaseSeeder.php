<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PacienteSeeder::class);
        $this->call(EstablecimientoSeeder::class);
        $this->call(MedicamentoSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(RecetaSeeder::class);
        $this->call(DetalleRecetaSeeder::class);
    }
}
