
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src=" {{ asset('adminlte/dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Asset Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
              <i class="nav-icon fa fa-layer-group"></i>
              <p>
                Loại tài sản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Kho chứa tài sản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Danh sách tài sản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-exchange-alt"></i>
              <p>
                Bàn giao
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-undo"></i>
              <p>
                Thu hồi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Thanh lý
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-chart-bar"></i>
              <p>
                Báo cáo
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('locations.index') }}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Quản lý người dùng
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
