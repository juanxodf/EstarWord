<?php

namespace App\Http\Controllers;

use App\Models\Nave;
use Illuminate\Http\Request;

class NaveController
{
    // Obtener todas las naves
    public function getAll(){
        return response()->json(Nave::all(), 200);
    }

    // Obtener nave por ID
    public function getById($id){
        return response()->json(Nave::find($id), 200);
    }

    // Crear nueva nave
    public function create(Request $request){
        $nuevaNave = new Nave;
        return response()->json($nuevaNave->create($request->all()), 201);
    }

    // Actualizar nave existente
    public function update(Request $request, $id){
        $valida = $request->validate([
            'nombre' => 'required|string',
            'modelo' => 'required|string',
            'tripulacion' => 'required|integer',
            'pasajeros' => 'required|integer',
            'clase_nave' => 'required|string'
        ]);

        $nave = Nave::updateOrCreate(['id' => $id], $valida);
        return response()->json($nave, $nave->wasRecentlyCreated ? 201 : 200);
    }

}
