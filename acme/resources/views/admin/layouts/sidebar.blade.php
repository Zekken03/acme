<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-drafting-compass"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ACME <sup>Architecture</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestión de Proyectos
    </div>

    <!-- Nav Item - Proyectos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projects') }}">
            <i class="fas fa-fw fa-building"></i>
            <span>Proyectos</span>
        </a>
    </li>

    <!-- Nav Item - Planos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.planos') }}">
            <i class="fas fa-fw fa-drafting-compass"></i>
            <span>Planos Arquitectónicos</span>
        </a>
    </li>

    <!-- Nav Item - Zonas -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.zones') }}">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Zonas</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Recursos Humanos
    </div>

    <!-- Nav Item - Arquitectos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.architects') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Arquitectos</span>
        </a>
    </li>

    <!-- Nav Item - Clientes -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.customers') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Clientes</span>
        </a>
    </li>

    <!-- Nav Item - Usuarios -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Usuarios</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->