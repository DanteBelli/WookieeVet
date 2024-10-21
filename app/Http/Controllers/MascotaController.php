<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function create(){
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:100',
            'peso'=>'required|double|max:20',
            'users_id'=>'required|integer',
            'razas_id'=>'required|integer',
        ]);
        Mascota::create($request->all());
        return redirect()->route('mascotas.create')->with('sucess','Mascota agregada con exito');
        
    }
}
