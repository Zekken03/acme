@extends('layouts.main')

@section('title', 'Gestión de Proyectos')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Proyectos</h1>
    <p class="mb-4">Gestión de proyectos arquitectónicos del sistema ACME.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Proyectos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Cliente</th>
                            <th>Arquitecto</th>
                            <th>Zona</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Entrega</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Casa Habitación</td>
                            <td>Proyecto de casa habitación de dos niveles...</td>
                            <td>Rigoberto Admin</td>
                            <td>Alex Architect</td>
                            <td>Zona Norte</td>
                            <td>2023-01-15</td>
                            <td>2023-12-15</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Edificio de Oficinas</td>
                            <td>Diseño y construcción de un edificio...</td>
                            <td>Pedro Regular</td>
                            <td>Luis Architect</td>
                            <td>Zona Sur</td>
                            <td>2023-03-01</td>
                            <td>2024-03-01</td>
                            <td><span class="badge badge-warning">En Progreso</span></td>
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