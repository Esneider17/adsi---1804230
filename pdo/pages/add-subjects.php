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

                <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-plus"></i>Adiccionar Aprendis

                </h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6  mb-4 ">

                <form class="" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Nombre completo</label>
                    <input type="text" name="name"  class="form-control" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="button" class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Guardar
                    </button>
                    <button type="reset" name="button" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                    </button>
                  </div>
                </form>
                <?php
                if($_POST) {

                  $name     =$_POST['name'];
                  $path      ="public/imgs/";
                  // $photo     =$path.time().".".pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
                  // move_uploaded_file($_FILES['photo']['tmp_name'],'../'.$photo);

                  if(saveSubjects($name,$conn)){
                      $_SESSION['Message']="la materia $name se adiciono con exito!";
                      echo "<script>
                      setTimeout(function(){
                        window.location.replace('../mod-subjects.php');
                      }, 1200)
                          </script>";

                  }

                }
                ?>


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
