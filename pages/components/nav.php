<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  <?php echo $_GET['page'] == 'dashboard' ? 'active' : ''?>" aria-current="page" href="?page=dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $_GET['page'] == 'karyawan' || $_GET ['page']=='karyawancreate' ? 'active' : ''?>" href="?page=karyawan">
              <span data-feather="users"></span>
              Data Karyawan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $_GET['page'] == 'barang' ? 'active' : ''?>" href="?page=barang">
              <span data-feather="layers"></span>
              Data Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="rewind"></span>
             Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>