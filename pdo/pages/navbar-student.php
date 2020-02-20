<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>



  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['unames']; ?></span>
        <img class="img-profile rounded-circle" src="<?php if(isset($_SESSION['uphoto'])) echo $url.$_SESSION['uphoto']; ?>">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo $url; ?>mystprofile.php">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Mi Perfil
        </a>
        <a class="dropdown-item" href="<?php echo $url; ?>mynotes.php">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
           Mis Calificaciones
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo $url; ?>close.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Cerrar Sesion
        </a>
      </div>
    </li>

  </ul>

</nav>
