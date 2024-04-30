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
                <a href="{{ url('/') }}" class="nav-link">
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
                <a href="{{ route('arsipansurat.index') }}" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>Arsip Surat</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Kelola Keuangan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview dropdown-menu-right">
                    <li class="nav-item">
                        <a href="{{ url('/kelola-keuangan') }}" class="nav-link">
                            <ul>
                                Keuangan RT
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/kelola-keuangan') }}" class="nav-link">
                            <ul>
                                Keuangan RW
                            </ul>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
