
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin'); ?>" class="brand-link">
      <img src="<?php echo base_url("assets/");?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url("assets/img/profile/".$profile->user_photo);?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $profile->nama; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li  class="nav-item">
            <a href="<?php echo base_url('admin'); ?>" <?php if ($page == "dashboard") { ?> class="active nav-link" <?php } else { ?> class="nav-link" <?php } ?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/article'); ?>" <?php if ($page == "article") { ?> class="active nav-link" <?php } else { ?> class="nav-link" <?php } ?>>
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Article
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/category_article'); ?>" <?php if ($page == "category_article") { ?> class="active nav-link" <?php } else { ?> class="nav-link" <?php } ?>>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category Article
              </p>
            </a>
          </li>
          <li  class="nav-item">
            <a href="<?php echo base_url('admin/user_role'); ?>" <?php if ($page == "user_role") { ?> class="active nav-link" <?php } else { ?>class="nav-link" <?php } ?>>
              <i class="nav-icon fas fa-th"></i>
              <p>
                User Roles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/user') ?>" <?php if ($page == "user") { ?> class="active nav-link" <?php } else { ?> class="nav-link" <?php } ?>>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/settings'); ?>" <?php if ($page == "settings") { ?> class="active nav-link" <?php } else { ?> class="nav-link" <?php } ?>>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>