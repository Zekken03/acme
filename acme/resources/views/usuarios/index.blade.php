@extends('layouts.main')

@section('title', 'Gestión de Usuarios')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
    <p class="mb-4">Gestión de usuarios del sistema ACME.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Nivel</th>
                            <th>Fecha Registro</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rigoberto Admin User</td>
                            <td>admin@example.com</td>
                            <td>1234567890</td>
                            <td><span class="badge badge-danger">Admin</span></td>
                            <td>2024-01-01</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pedro Regular User</td>
                            <td>user@example.com</td>
                            <td>0987654321</td>
                            <td><span class="badge badge-primary">User</span></td>
                            <td>2024-01-15</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Alex Architect User</td>
                            <td>architect@example.com</td>
                            <td>1122334455</td>
                            <td><span class="badge badge-info">Architect</span></td>
                            <td>2024-02-01</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Luis Architect User</td>
                            <td>luis.architect@example.com</td>
                            <td>2233445566</td>
                            <td><span class="badge badge-info">Architect</span></td>
                            <td>2024-02-15</td>
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