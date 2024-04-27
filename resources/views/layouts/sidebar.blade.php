<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Menambahkan menu untuk bendahara -->
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard')? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Menu</li>
            <li class="nav-item">
                <a href="{{ url('/laporan-keuangan') }}" class="nav-link">
                    <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Laporan Keuangan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/kelola-keuangan') }}" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>Kelola Keuangan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/kelola-iuran') }}" class="nav-link">
                    <i class="nav-icon fas fa-coins"></i>
                    <p>Kelola Iuran</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
