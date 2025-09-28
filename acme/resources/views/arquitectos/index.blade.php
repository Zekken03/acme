@extends('layouts.main')

@section('title', 'Gestión de Arquitectos')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Arquitectos</h1>
    <p class="mb-4">Gestión del personal arquitecto del sistema ACME.</p>

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
                            <th>Nombre Completo</th>
                            <th>Certificado</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
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
                            <td>789 Architect Blvd, City, Country</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Luis Architect</td>
                            <td>LUISRE23244323WF232</td>
                            <td>luis.architect@example.com</td>
                            <td>2233445566</td>
                            <td>321 Architect Way, City, Country</td>
                            <td><span class="badge badge-success">Activo</span></td>
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