<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mascota;
class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mascota1 = Mascota::create([
            'nombre' =>'Kaia',
            'peso'=>16.5,
            'users_id'=>1,
            'razas_id'=>1,
        ]);
        $mascota2 = Mascota::create([
            'nombre' =>'Botas',
            'peso'=>5.0,
            'users_id'=>2,
            'razas_id'=>2,
        ]);
        $mascota3 = Mascota::create([
            'nombre' =>'T-rex',
            'peso'=>4,
            'users_id'=>3,
            'razas_id'=>3,
        ]);
        
    }
}
