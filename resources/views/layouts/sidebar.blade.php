<aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #095642">
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
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
                        <p style="color: white">
                            Dashboard
                        </p>
                    </a>
                </li>
                
                {{-- Menu Barang --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope" style="color: white"></i>
                        <p style="color: white">
                            Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="/barang" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger" style="color: white"></i>
                            <p style="color: white">
                                Jenis Barang
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning" style="color: white"></i>
                            <p style="color: white">
                                Data Barang
                            </p>
                          </a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Transaksi --}}
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link">
                        <i class="nav-icon fas fa-edit" style="color: white"></i>
                        <p style="color: white">
                            Transaksi
                        </p>
                    </a>
                </li>
                
                {{-- Menu Laporan --}}
                <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book" style="color: white"></i>
                          <p style="color: white">
                              Laporan
                          </p>
                      </a>
                </li>

                @elsecan('isPetugas')
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
                        <p style="color: white">
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- Menu Transaksi --}}
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link">
                        <i class="nav-icon fas fa-edit" style="color: white"></i>
                        <p style="color: white">
                            Transaksi
                        </p>
                    </a>
                </li>

                {{-- Menu Laporan --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
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