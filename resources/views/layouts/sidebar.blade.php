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

              {{-- Menu-menu --}}
              <li class="nav-item">
                  <a href="/barang" class="nav-link">
                      <i class="nav-icon fas fa-envelope"></i>
                      <p>
                          Barang
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-edit"></i>
                      <p>
                          Transaksi
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/transaksimasuk" class="nav-link">
                              <i class="nav-icon far fa-circle text-info"></i>
                              <p>Barang Masuk</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/transaksikeluar" class="nav-link">
                              <i class="nav-icon far fa-circle text-danger"></i>
                              <p>Barang Keluar</p>
                          </a>
                        </li>
                  </ul>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-file"></i>
                      <p>
                          Laporan
                      </p>
                  </a>
              </li>
          </ul>
      </nav>
  </div>
  <!-- /.sidebar -->

</aside>