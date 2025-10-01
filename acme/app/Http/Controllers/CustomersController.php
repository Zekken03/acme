<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\Customer;

class CustomersController extends Controller
{
    public function getCustomers() {
        /* select * from customers with user information */
        $data = Customer::with('user')->get();
        return view('admin/customers')
        ->with('customers', $data);
    }
    
    public function createCustomer(Request $request) {
        //REGLAS DE VALIDACIÓN
        $request->validate([
            'name' => 'required|min:3',
            'paternal_surname' => 'required|min:2',
            'maternal_surname' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:8',
            'address' => 'required|min:10',
            'rfc' => 'required|min:10',
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
        $user->address = $request->address;
        $user->level = 'customer';
        $user->password = bcrypt($request->password);
        $user->save();

        //LUEGO CREAR EL CUSTOMER
        $customer = new Customer();
        $customer->customer_id = $user->id;
        $customer->rfc = $request->rfc;
        $customer->info_id = $user->id;
        $customer->save();
        
        return redirect()
            ->back()
            ->with('success', 'Cliente creado correctamente');
    }
}