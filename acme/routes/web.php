<?php

use Illuminate\Support\Facades\Route;
//IMPORTAR CONTROLADORES
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\ZonesController;
use App\Http\Controllers\ArchitectsController;
use App\Http\Controllers\CustomersController;

//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas para el dashboard administrativo
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/projects', [ProjectsController::class, 'getProjects']);
    Route::post('/projects', [ProjectsController::class, 'createProject']);
    
    Route::get('/planos', [PlanosController::class, 'getPlanos']);
    Route::post('/planos', [PlanosController::class, 'createPlano']);
    
    Route::get('/zones', [ZonesController::class, 'getZones']);
    Route::post('/zones', [ZonesController::class, 'createZone']);
    
    Route::get('/architects', [ArchitectsController::class, 'getArchitects']);
    Route::post('/architects', [ArchitectsController::class, 'createArchitect']);
    
    Route::get('/customers', [CustomersController::class, 'getCustomers']);
    Route::post('/customers', [CustomersController::class, 'createCustomer']);
    
    Route::get('/users', [UsersController::class, 'getUsers']);
    Route::post('/users', [UsersController::class, 'createUser']);
});
