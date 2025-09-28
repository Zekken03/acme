@extends('layouts.main')

@section('title', 'Gestión de Clientes')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
    <p class="mb-4">Gestión de clientes del sistema ACME.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Clientes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>RFC</th>
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
                            <td>Rigoberto Admin User</td>
                            <td>RG23354654WF232</td>
                            <td>admin@example.com</td>
                            <td>1234567890</td>
                            <td>123 Admin St, City, Country</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pedro Regular User</td>
                            <td>PRTGRE23244323WF232</td>
                            <td>user@example.com</td>
                            <td>0987654321</td>
                            <td>456 User Ave, City, Country</td>
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