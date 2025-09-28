@extends('admin.layouts.main')

@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Planos Arquitectónicos</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Plano
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Planos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Archivo</th>
                        <th>Proyecto</th>
                        <th>Fecha Creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Plano Planta Baja</td>
                        <td>/drawings/dibujo1.pdf</td>
                        <td>Casa Habitación</td>
                        <td>2023-01-20</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">Descargar</a>
                            <a href="#" class="btn btn-sm btn-primary">Ver</a>
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Plano Planta Alta</td>
                        <td>/drawings/dibujo2.pdf</td>
                        <td>Edificio de Oficinas</td>
                        <td>2023-02-15</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">Descargar</a>
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