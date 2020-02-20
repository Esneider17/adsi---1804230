<!-- Page Wrapper -->
<div id="wrapper">
  <!-- Sidebar -->
  <?php include 'menu-student.php'; ?>
  <!-- End of Sidebar -->
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <?php include 'navbar-student.php' ?>
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

          <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-list " ></i> Mis notas

          </h1>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-6  mb-4 ">

              <?php $id=$_SESSION['uid'];
              $mynotes = showMyNotes($id,$conn);
              ?>
              <table class=" table table-striped table-bordered table-hover">
                <tr>
                  <th>Materia</th>
                  <th>nota 1</th>
                  <th>nota 2 </th>
                  <th>nota 3 </th>
                  <th>Definitiva</th>
                </tr>
                <?php foreach ($mynotes as $mn ): ?>
                <tr>
                  <td><?php echo $mn['sname'] ?></td>
                  <td><?php echo $mn['nt1'] ?></td>
                  <td><?php echo $mn['nt2'] ?></td>
                  <td><?php echo $mn['nt3'] ?></td>
                  <td>
                    <?php if (round($mn['fnote'], 1)>=3.5): ?>
                      <span class="badge badge-success">
                        <?php echo round($mn['fnote'],1); ?>
                      </span>
                    <?php else: ?>
                    <span class="badge badge-danger">
                    <?php echo round($mn['fnote'],1); ?>
                    </span>
                    <?php endif ?></td>
                </tr>
              <?php endforeach; ?>
              <tr>
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
