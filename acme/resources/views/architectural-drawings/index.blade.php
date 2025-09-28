@extends('layouts.main')

@section('title', 'Gestión de Planos Arquitectónicos')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestión de Planos Arquitectónicos</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Plano
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Planos Table Card -->
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Planos Arquitectónicos</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Acciones:</div>
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
                                    <th>Nombre del Plano</th>
                                    <th>Proyecto</th>
                                    <th>Tipo de Plano</th>
                                    <th>Versión</th>
                                    <th>Fecha Creación</th>
                                    <th>Última Modificación</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Planta Arquitectónica - Piso 1</td>
                                    <td>Residencia Los Pinos</td>
                                    <td><span class="badge badge-primary">Planta</span></td>
                                    <td>v2.1</td>
                                    <td>2024-12-01</td>
                                    <td>2024-12-15</td>
                                    <td><span class="badge badge-success">Aprobado</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" title="Ver Plano">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" title="Descargar">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Planta Arquitectónica - Piso 2</td>
                                    <td>Residencia Los Pinos</td>
                                    <td><span class="badge badge-primary">Planta</span></td>
                                    <td>v1.3</td>
                                    <td>2024-12-05</td>
                                    <td>2024-12-10</td>
                                    <td><span class="badge badge-warning">En Revisión</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" title="Ver Plano">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" title="Descargar">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fachada Principal</td>
                                    <td>Villa Moderna</td>
                                    <td><span class="badge badge-info">Fachada</span></td>
                                    <td>v1.0</td>
                                    <td>2024-11-20</td>
                                    <td>2024-11-25</td>
                                    <td><span class="badge badge-success">Aprobado</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" title="Ver Plano">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" title="Descargar">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Corte Longitudinal A-A</td>
                                    <td>Casa Campestre</td>
                                    <td><span class="badge badge-secondary">Corte</span></td>
                                    <td>v1.0</td>
                                    <td>2025-01-15</td>
                                    <td>2025-01-15</td>
                                    <td><span class="badge badge-danger">Pendiente</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" title="Ver Plano">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" title="Descargar">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Planta de Locación</td>
                                    <td>Villa Moderna</td>
                                    <td><span class="badge badge-success">Locación</span></td>
                                    <td>v2.0</td>
                                    <td>2024-11-15</td>
                                    <td>2024-12-01</td>
                                    <td><span class="badge badge-success">Aprobado</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm" title="Ver Plano">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" title="Descargar">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
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

        <!-- Distribución por Tipo de Plano -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Distribución por Tipo</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Plantas
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Fachadas
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-secondary"></i> Cortes
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Locación
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estadísticas de Planos -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Estadísticas de Planos</h6>
                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center mb-3">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total de Planos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">28</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ruler-combined fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    
                    <div class="row no-gutters align-items-center mb-3">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Planos Aprobados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    
                    <div class="row no-gutters align-items-center mb-3">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                En Revisión</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Pendientes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection