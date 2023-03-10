<aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #0b507b">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               <img src="{{asset('dist/img/box.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
               <a style="color: white"><b>INVENTORY</b></a>
            </div>
        </div>
        <hr style="color: white">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('isSuperAdmin')
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link @yield('dashboard')" >
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
                        <p style="color: white">
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- Data User --}}
                <li class="nav-item">
                    <a href="/user" class="nav-link @yield('user')" >
                        <i class="nav-icon fas fa-solid fa-users" style="color: white"></i>
                        <p style="color: white">
                            Data User
                        </p>
                    </a>
                </li>
                
                {{-- Menu Barang --}}
                <li class="nav-item">
                    <a href="#" class="nav-link @yield('master')">
                        <i class="nav-icon fas fa-solid fa-database" style="color: white"></i>
                        <p style="color: white">
                            Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="/barang" class="nav-link @yield('jenis')">
                            <i class="nav-icon bi bi-journal-richtext text-info" style="color: white"></i>
                            <p style="color: white">
                                Jenis Barang
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="/data" class="nav-link @yield('data')">
                            <i class="nav-icon bi bi-journal-text text-info" style="color: white"></i>
                            <p style="color: white">
                                Data Barang
                            </p>
                          </a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Transaksi --}}
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link @yield('transaksi')">
                        <i class="nav-icon fas fa-briefcase" style="color: white"></i>
                        <p style="color: white">
                            Transaksi
                        </p>
                    </a>
                </li>
                
                {{-- Menu Laporan --}}
                <li class="nav-item">
                      <a href="/laporan" class="nav-link @yield('laporan')">
                          <i class="nav-icon fas fa-book" style="color: white"></i>
                          <p style="color: white">
                              Laporan
                          </p>
                      </a>
                </li>

                @elsecan('isPetugas')
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link @yield('dashboard')" >
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
                        <p style="color: white">
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- Menu Transaksi --}}
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link @yield('transaksi')">
                        <i class="nav-icon fas fa-briefcase" style="color: white"></i>
                        <p style="color: white">
                            Transaksi
                        </p>
                    </a>
                </li>
                
                {{-- Menu Laporan --}}
                <li class="nav-item">
                      <a href="/laporan" class="nav-link @yield('laporan')">
                          <i class="nav-icon fas fa-book" style="color: white"></i>
                          <p style="color: white">
                              Laporan
                          </p>
                      </a>
                </li>
                @endcan                
            </ul>
        </nav>
    </div>
</aside>