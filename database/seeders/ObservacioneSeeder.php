<?php

namespace Database\Seeders;

use App\Models\Observacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obs1 = Observacione::create([
            'observacion' =>'Obs nro1 con iduser5 , y idmascota 1',
            'iduser'=>4,
            'idmascota'=>1,
        ]);
    }
}
