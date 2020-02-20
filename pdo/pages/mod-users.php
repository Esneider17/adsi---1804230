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
                <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-users"></i>Modulo Aprendices</h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-12  mb-4 ">
                  <a href="students/add.php" class="btn btn-success">Adiccionar
                  <i class="fa fa-plus"></i>
                </a>
                <hr>
                <?php $students = listStudents($conn); ?>
                <table id="dataTable" class="table table-borderedm table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Nombre completo</th>
                      <th>Correo electronico</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre completo</th>
                      <th>Correo electronico</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($students as $student ): ?>
                      <tr>
                        <td><?php echo $student['names']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td>
                          <?php if ($student['status']=="Active"): ?>
                            <span class="badge badge-success">
                              <i class="fa fa-check"></i>
                            </span>
                          <?php else: ?>
                          <span class="badge badge-danger">
                            <i class="fa fa-times"></i>
                          </span>
                        <?php endif ?>
                        </td>
                        <td><?php echo $student['status']; ?></td>
                        <td>

                          <a href="students/show.php?id=<?php echo $student['id']; ?>" class="btn btn-sm btn-dark"><i class="fa fa-search" ></i></a>
                          <a href="students/edit.php?id=<?php echo $student['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-pen"  ></i></a>
                          <a href="javascript:;" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $student['id'];  ?>" data-dir="students"><i class="fa fa-trash"  ></i></a>
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
