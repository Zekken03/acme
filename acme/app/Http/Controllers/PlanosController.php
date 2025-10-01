<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\Plano;

class PlanosController extends Controller
{
    public function getPlanos() {
        /* select * from architectural_drawings */
        $data = Plano::all();
        // Obtener proyectos para el formulario
        $projects = \App\Models\Project::all();
        return view('admin/planos')
        ->with('planos', $data)
        ->with('projects', $projects);
    }
    
    public function createPlano(Request $request) {
        //REGLAS DE VALIDACIÓN
        $request->validate([
            'name' => 'required|min:3',
            'file_design' => 'required|file|mimes:pdf,dwg,png,jpg,jpeg|max:10240',
            'description' => 'nullable|string|max:255',
            'project_id' => 'required|exists:projects,id'
        ]);

        //SUBIR ARCHIVO
        $fileName = null;
        if ($request->hasFile('file_design')) {
            $fileName = $request->file('file_design')->store('planos', 'public');
        } else {
            return redirect()->back()->with('error', 'No se recibió el archivo');
        }

        //INSERTAR REGISTRO
        try {
            $plano = new Plano();
            $plano->drawing_id = uniqid('PLANO_');
            $plano->name = $request->name;
            $plano->file_design = $fileName;
            $plano->description = $request->description;
            $plano->project_id = $request->project_id;
            $plano->create_date = now()->format('Y-m-d');
            $plano->save();
            
            return redirect()
                ->back()
                ->with('success', 'Plano creado correctamente: ' . $fileName);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Error al guardar: ' . $e->getMessage());
        }
    }
}