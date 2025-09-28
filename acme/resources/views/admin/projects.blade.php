@extends('admin.layouts.main')

@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestión de Proyectos</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Proyecto
    </a>
</div>

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
                        <th>Zona</th>
                        <th>Arquitecto</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Entrega</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Casa Habitación</td>
                        <td>Proyecto de casa habitación de dos niveles...</td>
                        <td>Cliente 1</td>
                        <td>Zona Norte</td>
                        <td>Alex Architect</td>
                        <td>2023-01-15</td>
                        <td>2023-12-15</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Ver</a>
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Edificio de Oficinas</td>
                        <td>Diseño y construcción de un edificio...</td>
                        <td>Cliente 2</td>
                        <td>Zona Sur</td>
                        <td>Luis Architect</td>
                        <td>2023-03-01</td>
                        <td>2024-03-01</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Ver</a>
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection