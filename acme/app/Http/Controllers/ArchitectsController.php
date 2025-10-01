<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\Architect;

class ArchitectsController extends Controller
{
    public function getArchitects() {
        /* select * from architects with user information */
        $data = Architect::with('user')->get();
        return view('admin/architects')
        ->with('architects', $data);
    }
    
    public function createArchitect(Request $request) {
        //REGLAS DE VALIDACIÓN
        $request->validate([
            'name' => 'required|min:3',
            'paternal_surname' => 'required|min:2',
            'maternal_surname' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:8',
            'certificate' => 'required|min:10',
            'password' => 'required|min:6',
            'password2' => 'required|same:password'
        ]);

        //PRIMERO CREAR EL USUARIO
        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->paternal_surname = $request->paternal_surname;
        $user->maternal_surname = $request->maternal_surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address ?? 'No especificada';
        $user->level = 'architect';
        $user->password = bcrypt($request->password);
        $user->save();

        //LUEGO CREAR EL ARCHITECT
        $architect = new Architect();
        $architect->architect_id = $user->id;
        $architect->certificate = $request->certificate;
        $architect->info_id = $user->id;
        $architect->save();
        
        return redirect()
            ->back()
            ->with('success', 'Arquitecto creado correctamente');
    }
}