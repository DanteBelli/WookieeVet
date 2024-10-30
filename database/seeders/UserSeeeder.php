<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' =>'ProbandoSeeder1',
            'password' =>'1234asdf',
            'email'=>'probandoo1@gmail.com',
            'apellido'=>'Bell',
            'dni'=>14122447,
            'telefono'=>1145736485,
        ]);
        $user2 = User::create([
            'name' =>'ProbandoSeeder2',
            'password' =>'1234asdf',
            'email'=>'probandoo2@gmail.com',
            'apellido'=>'Bell',
            'dni'=>14122417,
            'telefono'=>1125736485,
        ]);
        $user3 = User::create([
            'name' =>'ProbandoSeeder3',
            'password' =>'1234asdf',
            'email'=>'probandoo3@gmail.com',
            'apellido'=>'Bell',
            'dni'=>14122427,
            'telefono'=>1115736485,
        ]);
        
        $user3 = User::create([
            'name' =>'ProbandoVeterinario',
            'password' =>'1234asdf',
            'email'=>'probandVet3@gmail.com',
            'apellido'=>'Bell',
            'dni'=>14122437,
            'telefono'=>1115736485,
        ]);
        $user3 = User::create([
            'name' =>'ProbandoAdmin',
            'password' =>'1234asdf',
            'email'=>'probandAdmin@gmail.com',
            'apellido'=>'Bell',
            'dni'=>14122437,
            'telefono'=>1115736485,
        ]);
    }
}
