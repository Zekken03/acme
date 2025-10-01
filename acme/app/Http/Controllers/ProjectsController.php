<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\Project;

class ProjectsController extends Controller
{
    public function getProjects() {
        /* select * from projects */
        $data = Project::all();
        return view('admin/projects')
        ->with('projects', $data);
    }
    
    public function createProject(Request $request) {
        //REGLAS DE VALIDACIÓN
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'status' => 'required',
            'architect_id' => 'required|exists:architects,id',
            'customer_id' => 'required|exists:customers,id'
        ]);

        //INSERTAR REGISTRO
        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->architect_id = $request->architect_id;
        $project->customer_id = $request->customer_id;
        $project->save();
        
        return redirect()
            ->back()
            ->with('success', 'Proyecto creado correctamente');
    }
}