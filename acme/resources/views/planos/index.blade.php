@extends('layouts.main')

@section('title', 'Planos Arquitectónicos')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Planos Arquitectónicos</h1>
    <p class="mb-4">Gestión de planos y diseños arquitectónicos.</p>

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
                            <th>Proyecto</th>
                            <th>Archivo</th>
                            <th>Fecha Creación</th>
                            <th>Versión</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Plano Planta Baja</td>
                            <td>Casa Habitación</td>
                            <td>dibujo1.pdf</td>
                            <td>2023-01-20</td>
                            <td>1.0</td>
                            <td><span class="badge badge-success">Aprobado</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-success btn-sm">Descargar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Plano Planta Alta</td>
                            <td>Edificio de Oficinas</td>
                            <td>dibujo2.pdf</td>
                            <td>2023-02-15</td>
                            <td>1.1</td>
                            <td><span class="badge badge-warning">En Revisión</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-success btn-sm">Descargar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection