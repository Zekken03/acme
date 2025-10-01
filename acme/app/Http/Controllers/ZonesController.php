<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\Zone;

class ZonesController extends Controller
{
    public function getZones() {
        /* select * from zones */
        $data = Zone::all();
        return view('admin/zones')
        ->with('zones', $data);
    }
    
    public function createZone(Request $request) {
        //REGLAS DE VALIDACIÓN
        $request->validate([
            'name' => 'required|min:3|unique:zones,name',
            'description' => 'required|min:5'
        ]);

        //INSERTAR REGISTRO
        $zone = new Zone();
        $zone->name = $request->name;
        $zone->description = $request->description;
        $zone->save();
        
        return redirect()
            ->back()
            ->with('success', 'Zona creada correctamente');
    }
}