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
                <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-list"></i>  Modulo Notas</h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-12  mb-4 ">
                  <a href="notes/add.php" class="btn btn-success">Adiccionar
                  <i class="fa fa-plus"></i>
                </a>
                <hr>
                <?php $notes = listNotes($conn); ?>
                <table id="dataTable" class="table table-borderedm table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Estudiante</th>
                      <th>Materia</th>
                      <th>Nota final</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Estudiante</th>
                      <th>Materia</th>
                      <th>Nota final</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($notes as $note ): ?>
                      <tr>
                        <td><?php echo $note['uname']; ?></td>
                        <td><?php echo $note['sname']; ?></td>
                        <td>
                            <?php if (round($note['fnote'], 1)>=3.5): ?>
                              <span class="badge badge-success">
                                <?php echo round($note['fnote'],1); ?>
                              </span>
                            <?php else: ?>
                            <span class="badge badge-danger">
                            <?php echo round($note['fnote'],1); ?>
                            </span>
                            <?php endif ?>

                        </td>
                        <td>
                          <a href="notes/show.php?id=<?php echo $note['id']; ?>" class="btn btn-sm btn-dark"><i class="fa fa-search" ></i></a>
                          <a href="notes/edit.php?id=<?php echo $note['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-pen"  ></i></a>
                          <a href="javascript:;" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $note['id'];  ?>" data-dir="notes"><i class="fa fa-trash"  ></i></a>
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
