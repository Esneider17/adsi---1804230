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

          <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-search"></i>Consultar Materia

          </h1>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-6  mb-4 ">
            <?php if($_GET): ?>
              <?php $id=$_GET['id'];
              $subject = showSubjects($id,$conn);
              ?>
              <table class=" table table-striped table-bordered table-hover">
                <?php foreach ($subject as $sb ): ?>
                  <!-- <tr>
                    <td colspan="2" class="text-center">
                      <img  class="rounded-circle img-thumbnail"src="<?php echo $url.$sb['photo'] ?>" style="width:14rem ; height:14rem" >
                    </td>
                  </tr> -->
                  <tr>
                    <th>Nombre completo</th>
                    <td><?php echo $sb['name']; ?></td>
                  </tr>

                  <!-- <tr>
                    <th>Estado</th>
                    <td>//<?php if ($st['status']=="Active"): ?>
                      <span class="badge badge-success">
                        <i class="fa fa-check"></i>Activo
                      </span>
                    <?php else: ?>
                      <span class="badge badge-danger">
                        <i class="fa fa-times"></i>Inactivo
                      </span>
                    <?php endif ?>
                  </td>
                </tr> -->
              <?php endforeach; ?>
            </table>
          <?php endif ?>
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
