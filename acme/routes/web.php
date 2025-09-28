<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas para el dashboard administrativo
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::get('/projects', function () {
        return view('admin.projects');
    })->name('admin.projects');
    
    Route::get('/planos', function () {
        return view('admin.planos');
    })->name('admin.planos');
    
    Route::get('/zones', function () {
        return view('admin.zones');
    })->name('admin.zones');
    
    Route::get('/architects', function () {
        return view('admin.architects');
    })->name('admin.architects');
    
    Route::get('/customers', function () {
        return view('admin.customers');
    })->name('admin.customers');
    
    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');
});
