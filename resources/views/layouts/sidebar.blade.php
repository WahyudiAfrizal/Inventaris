<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               <img src="dist/img/AA.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
               <a style="color: white"><b>INVENTORI</b></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('isSuperAdmin')
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
                {{-- Menu Barang --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="/barang" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p>Jenis Barang</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Data Barang</p>
                          </a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Transaksi --}}
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                
                {{-- Menu Laporan --}}
                <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Laporan
                          </p>
                      </a>
                </li>

                @elsecan('isPetugas')
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- Menu Transaksi --}}
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>

                {{-- Menu Laporan --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                @endcan                
            </ul>
        </nav>
    </div>
</aside>