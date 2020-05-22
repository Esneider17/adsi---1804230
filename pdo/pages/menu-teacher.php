<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-user"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SENA</div>
  </a> -->

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo $url; ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Escritorio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>myprofile.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Mi Perfil</span></a>
        </li>
        <li class="nav-item  <?php if ($section=='users'): ?> active <?php endif ?>">
          <a class="nav-link" href="<?php echo $url; ?>mod-users.php">
            <i class="fas fa-fw fa-list"></i>
            <span>Modulo Aprendices</span></a>
          </li>
          <li class="nav-item  <?php if ($section=='subject'): ?> active <?php endif ?>">
            <a class="nav-link" href="<?php echo $url; ?>mod-subjects.php">
              <i class="fas fa-fw fa-list"></i>
              <span>Modulo Materias</span></a>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url; ?>mod-notes.php">
            <i class="fas fa-fw fa-list"></i>
            <span>Modulo Calificaciones</span></a>
          </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>