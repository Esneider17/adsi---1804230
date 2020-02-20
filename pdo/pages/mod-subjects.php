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
                <h1 class="h3 mb-0 text-gray-800"><i class=" fa fa-book"></i>Modulo Materias</h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-12  mb-4 ">
                  <a href="subjects/add.php" class="btn btn-success">Adiccionar
                  <i class="fa fa-plus"></i>
                </a>
                <hr>
                <?php $subjects = listSubjects($conn); ?>
                <table id="dataTable" class="table table-borderedm table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Nombre </th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre </th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($subjects as $subject ): ?>
                      <tr>
                        <td><?php echo $subject['id']; ?></td>
                        <td><?php echo $subject['name']; ?></td>
                        <td>
                          <!-- <a href="subjects/show.php?id=<?php echo $subject['id']; ?>" class="btn btn-sm btn-dark"><i class="fa fa-search" ></i></a> -->
                          <a href="subjects/edit.php?id=<?php echo $subject['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-pen"  ></i></a>
                          <a href="javascript:;" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $subject['id'];  ?>" data-dir="subjects"><i class="fa fa-trash"  ></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
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
