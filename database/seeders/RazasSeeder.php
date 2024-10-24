<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Raza;
class RazasSeeder extends Seeder
{
        public function run(): void
        {
            $raza1 = Raza::create([
                'nombre' =>'Border Collie',
                'observaciones' => 'Alergia a X medicamento',
                'tipo__mascotas_id' => '1',
            ]);
            $raza3 = Raza::create([
                'nombre' =>'Siames',
                'observaciones' => 'Cuidado con X cosa',
                'tipo__mascotas_id' => '2',
            ]);
            $raza3 = Raza::create([
                'nombre' =>'Mini Rex',
                'observaciones' => 'Pati corto',
                'tipo__mascotas_id' => '3',
            ]);
            $raza4 = Raza::create([
                'nombre' =>'Golden',
                'observaciones' => 'Le gusta el agua',
                'tipo__mascotas_id' => '1',
            ]);
            
    }
}
