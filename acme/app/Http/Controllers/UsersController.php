<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsers() {
        /* select * from users */
        $data = User::all();
        return view('admin/users')
        ->with('usuarios', $data);
    }
    
    public function createUser(Request $request) {
        //REGLAS DE VALIDACIÓN
        $request->validate([
            'name' => 'required|min:3',
            'paternal_surname' => 'required|min:2',
            'maternal_surname' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:8',
            'address' => 'required|min:10',
            'level' => 'required|in:admin,architect,customer',
            'password' => 'required|min:6',
            'password2' => 'required|same:password'
        ]);

        //INSERTAR USUARIO
        $user = new User();
        $user->name = $request->name;
        $user->paternal_surname = $request->paternal_surname;
        $user->maternal_surname = $request->maternal_surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->level = $request->level;
        $user->password = bcrypt($request->password);
        $user->save();

        // CREAR RELACIÓN SEGÚN EL NIVEL
        if ($request->level === 'architect') {
            $architect = new \App\Models\Architect();
            $architect->architect_id = $user->id;
            $architect->certificate = $request->certificate ?? 'PENDING';
            $architect->info_id = $user->id;
            $architect->save();
        } elseif ($request->level === 'customer') {
            $customer = new \App\Models\Customer();
            $customer->customer_id = $user->id;
            $customer->rfc = $request->rfc ?? 'PENDING';
            $customer->info_id = $user->id;
            $customer->save();
        }
        
        return redirect()
            ->back()
            ->with('success', 'Usuario creado correctamente');
    }
}