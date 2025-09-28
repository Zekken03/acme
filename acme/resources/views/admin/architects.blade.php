@extends('admin.layouts.main')

@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestión de Arquitectos</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Arquitecto
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Arquitectos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Certificación</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alex Architect</td>
                        <td>CERT2323ALEXWF232</td>
                        <td>architect@example.com</td>
                        <td>1122334455</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Ver</a>
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Luis Architect</td>
                        <td>LUISRE23244323WF232</td>
                        <td>luis.architect@example.com</td>
                        <td>2233445566</td>
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