<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rols;
class RolsSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols1 = Rols::create([
            'nombre' => 'Administrador'
        ]);
        $rols2 = Rols::create([
            'nombre' => 'Cliente'
        ]);
        $rols3 = Rols::create([
            'nombre' => 'Veterinario'
        ]);
        //
    }
}
