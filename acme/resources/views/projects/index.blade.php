@extends('layouts.main')

@section('title', 'Gestión de Proyectos')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestión de Proyectos</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Proyecto
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Proyectos Table Card -->
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Proyectos Activos</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Acciones del Proyecto:</div>
                            <a class="dropdown-item" href="#">Exportar Lista</a>
                            <a class="dropdown-item" href="#">Generar Reporte</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre del Proyecto</th>
                                    <th>Cliente</th>
                                    <th>Arquitecto</th>
                                    <th>Zona</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Estimada</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Residencia Los Pinos</td>
                                    <td>Carlos Mendoza</td>
                                    <td>Arq. García López</td>
                                    <td>Zona Centro</td>
                                    <td>2024-12-01</td>
                                    <td>2025-06-15</td>
                                    <td><span class="badge badge-warning">En Progreso</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Villa Moderna</td>
                                    <td>Ana Rodríguez</td>
                                    <td>Arq. María Torres</td>
                                    <td>Zona Norte</td>
                                    <td>2024-11-15</td>
                                    <td>2025-05-20</td>
                                    <td><span class="badge badge-success">Completado</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Casa Campestre</td>
                                    <td>Luis González</td>
                                    <td>Arq. Pedro Ramírez</td>
                                    <td>Zona Sur</td>
                                    <td>2025-01-10</td>
                                    <td>2025-08-30</td>
                                    <td><span class="badge badge-primary">Planificación</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Proyectos por Estado -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Distribución por Estado</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Planificación
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-warning"></i> En Progreso
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Completado
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estadísticas Rápidas -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Estadísticas Rápidas</h6>
                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de Proyectos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Proyectos Completados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">En Progreso</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">En Planificación</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection