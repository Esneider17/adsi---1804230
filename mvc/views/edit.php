<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     -->
     <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>welcome</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">

                  <h1>modificar aprendiz</h1>
                  <?php

                  while($row = mysqli_fetch_array($data)){
                    ?>
                <form class="" action="./" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="method" value="update">
                      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  <div class="form-group">
                    <label for="names">Nombre completo</label>
                    <input type="text" name="names"  class="form-control"  value="<?php echo $row['names'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="birthdate">Fecha nacimiento</label>
                    <input type="date" name="birthdate"  class="form-control"  value="<?php echo $row['birthdate'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"  class="form-control"  value="<?php echo $row['email'] ?>"required>
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

                </form>
              <?php } ?>

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
    </div>
  </div>
</div>
</body>
</html>
