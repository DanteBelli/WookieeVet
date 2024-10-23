<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Mascota extends Model
{
    //probando solucionar error
    protected $table = 'tipo__mascotas';
    protected $filable = ['nombre'];
}
