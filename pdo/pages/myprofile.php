<!-- Page Wrapper -->
<div id="wrapper">
  <!-- Sidebar -->
  <?php include 'menu-teacher.php'; ?>
  <!-- End of Sidebar -->
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <?php include 'navbar-teacher.php' ?>
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

          <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-user " ></i> Mi Perfil

          </h1>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-6  mb-4 ">

              <?php $id=$_SESSION['uid'];
              $myprofile = showStudent($id,$conn);

              ?>

              <table class=" table table-striped table-bordered table-hover">
                <?php foreach ($myprofile as $mp ): ?>
                  <tr>
                    <td colspan="2" class="text-center bg-gradient-danger">
                      <img  class="rounded-circle img-thumbnail"src="<?php echo $url.$mp['photo'] ?>" style="width:14rem ; height:14rem" >
                      <div class=" h3 text-light">Profesor</div>
                    </td>
                  </tr>
                  <tr>
                    <th>Nombre completo</th>
                    <td><?php echo $mp['names']; ?></td>
                  </tr>
                  <tr>
                    <th>Correo electronico</th>
                    <td><?php echo $mp['email']; ?></td>
                  </tr>
                  <tr>
                    <th>Fecha nacimiento</th>
                    <td><?php echo $mp['birthdate']; ?></td>
                  </tr>
                  <tr>
                    <th>Rol</th>
                    <td><?php echo $mp['role']; ?></td>
                  </tr>
                  <tr>
                    <th>Estado</th>
                    <td><?php if ($mp['status']=="Active"): ?>
                      <span class="badge badge-success">
                        <i class="fa fa-check"></i>Activo
                      </span>
                    <?php else: ?>
                      <span class="badge badge-danger">
                        <i class="fa fa-times"></i>Inactivo
                      </span>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="2" class=" text-center bg-gradient-dark">
                    <a class="btn btn-light btn-sm" href="myprofile/edit.php?id=<?php echo $id ?>">
                  <i href="fa fa-edit"></i>
                  Modificar Datos
                  </a>
                </td>
              </tr>
            </table>
        </div>
      </div>
      <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Todos los derechos reservados  &copy; <?php  echo date('Y') ?></span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
