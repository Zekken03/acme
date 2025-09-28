@extends('admin.layouts.main')

@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestión de Zonas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Nueva Zona
    </a>
</div>

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
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Zona Norte</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Ver</a>
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Zona Sur</td>
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