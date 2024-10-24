<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use App\Models\Raza;
use App\Models\Tipo_Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function create(){
        // Traigo todos los tipos de mascota para que el usuario elija una y luego con esa data le cargo las razas de ese tipo
        $tipos  = Tipo_Mascota::all();
        return view('mascotas.create', compact('tipos'));
    }
    public function getRazaPorTipo($tipos)
    {
        $razas = Raza::where('tipo_mascotas_id', $tipos)->get();
        return response()->json($razas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:100',
            'peso'=>'required|numeric|max:20',
            'tipo_id'=>'required|integer',
            'razas_id'=>'required|integer',
        ]);
        $data = $request->all();
        $data['users_id'] = auth()->id();
        Mascota::create($data);
        return redirect()->route('mascotas.create')->with('sucess','Mascota agregada con exito');
        
    }
}
