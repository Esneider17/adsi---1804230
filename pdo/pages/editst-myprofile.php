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

                <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-pen"></i>Modificar Mi Perfil

                </h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6  mb-4 ">
                  <?php if($_GET): ?>
                    <?php $id=$_GET['id'];
                    $student = showStudent($id,$conn);
                    ?>
                <form class="" action="" method="post" enctype="multipart/form-data">
                    <?php foreach ($student as $st ): ?>
                      <input type="hidden" name="id" value="<?php echo $st['id'] ?>">
                  <div class="form-group">
                    <label for="names">Nombre completo</label>
                    <input type="text" name="names"  class="form-control"  value="<?php echo $st['names'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="birthdate">Fecha nacimiento</label>
                    <input type="date" name="birthdate"  class="form-control"  value="<?php echo $st['birthdate'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"  class="form-control"  value="<?php echo $st['email'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="photo">Foto</label>
                    <input type="file" name="photo"  class=" form-control-file" >
                  </div>
                  <div class="form-group">
                    <button type="submit" name="button" class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Modificar
                    </button>
                    <button type="reset" name="button" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                    </button>
                  </div>
                  <?php endforeach; ?>
                </form>
          <?php endif ?>
                <?php
                if($_POST) {

                  $names     =$_POST['names'];
                  $birthdate =$_POST['birthdate'];
                  $email     =$_POST['email'];
                  $path      ="public/imgs/";
                  if (!empty($_FILES['photo']['name'])) {
                    $photo     =$path.time().".".pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['photo']['tmp_name'],'../'.$photo);
                  }else {
                    $photo = null;
                  }

                  if(updateStudent( $id,$names,$birthdate,$email,$photo,$conn)){
                      $_SESSION['Message']="mi perfil $names se Modifico con exito!";
                      echo "<script>
                      setTimeout(function(){
                        window.location.replace('../mystprofile.php');
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
