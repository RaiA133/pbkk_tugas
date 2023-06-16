<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('asset/img/pp.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('https://raia133.github.io') }}" target="_blank" class="d-block">Raie Aswajjillah</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
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
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ ($title == 'Dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('/mahasiswa/create') }}" class="nav-link {{ ($title == 'Tambah Data') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Tambah Data Mahasiswa
                        </p>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa') }}" class="nav-link {{ ($title == 'Data Mahasiswa') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Mahasiswa
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa/wali') }}" class="nav-link {{ ($title == 'Data Wali') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Wali (1 to 1)
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/mahasiswa/dosen') }}" class="nav-link {{ ($title == 'Data Dosen') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Dosen (1 to M)
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/mahasiswa/matkul') }}" class="nav-link {{ ($title == 'Data Matkul') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Matkul (M to M)
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ url('/tendik') }}" class="nav-link {{ ($title == 'Data Tendik') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Tendik
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/tendik/create') }}" class="nav-link {{ ($title == 'Tambah Data Tendik') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tambah Data Tendik
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ url('AdminLTE/index.html') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                    </a>
                </li> --}}


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>