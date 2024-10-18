<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_Mascota;
class TipoMascotaSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $tipo1 = Tipo_Mascota::create([
            'nombre' => 'Perro'
         ]);
         $tipo2 = Tipo_Mascota::create([
            'nombre' => 'Gato'
         ]);
         $tipo3 = Tipo_Mascota::create([
            'nombre' => 'Conejo'
         ]);
    }
}
