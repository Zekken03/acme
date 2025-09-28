@extends('layouts.main')

@section('title', 'Gestión de Zonas')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Zonas</h1>
    <p class="mb-4">Gestión de zonas geográficas del sistema ACME.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Zonas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zona ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Proyectos Activos</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Zona Norte</td>
                            <td>Área metropolitana norte de la ciudad</td>
                            <td>1</td>
                            <td><span class="badge badge-success">Activa</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>Zona Sur</td>
                            <td>Área metropolitana sur de la ciudad</td>
                            <td>1</td>
                            <td><span class="badge badge-success">Activa</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection