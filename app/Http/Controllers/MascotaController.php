<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use App\Models\Raza;
use App\Models\Tipo_Mascota;
use Illuminate\Http\Request;
use View;

class MascotaController extends Controller
{
    public function create(){
        // Traigo todos los tipos de mascota para que el usuario elija una y luego con esa data le cargo las razas de ese tipo
        $tipos  = Tipo_Mascota::all();
        return view('mascotas.create', compact('tipos'));
    }
    public function getRazaPorTipo($tipos)
    {
        $razas = Raza::where('tipo__mascotas_id', $tipos)->get();
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
    public function editSelection()
    {
        $mascotas = Mascota::where('users_id' , auth()->id())->get();
        return view('mascotas.edit' , compact('mascotas'));
    }
    public function edit($id)
    {
        $mascota = Mascota::findOrFail($id);
        $tipos = Tipo_Mascota::all();
        return view('mascotas.editForm', compact('mascota','tipos'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'nombre'=>'required|string|max:50',
            'peso'=>'required|numeric|max:10',
            'tipo_id'=>'required|integer',
            'raza_id'=>'required|integer',
        ]);
        $mascota = Mascota::findOrFail($id);
        $mascota->update($request->all());
        return redirect()->route('dashboard')->with('','Mascota editada');
    }
    }
