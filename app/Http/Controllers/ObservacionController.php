<?php

namespace App\Http\Controllers;

use App\Models\Observacione;
use Illuminate\Http\Request;
use App\Models\Mascota;

class ObservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        return view('observacion.create', compact('mascotas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }
    public function select(){
        $mascotas = Mascota::all();
        $observaciones = Observacione::all();
        return view('observacion.consulta',compact('mascotas','observaciones'));
    }
    public function getObs($idmascota){
        $observaciones = Observacione::where('idmascota' , $idmascota)->get();
        return response()->json($observaciones);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'observacion'=>'required|string',
            'idmascota'=>'required|integer',
        ]);
        $data = $request->all();
        $data['iduser'] = auth()->id();
        Observacione::create($data);
        return redirect()->route('observacion.create')->with('Exito','Observacion Agregada Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
