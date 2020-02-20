<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>add</title>
  </head>
  <body>
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

        <form  action="./" method="post" enctype="multipart/form-data">
          <input type="hidden" name="method" value="store">
          <div class="form-group">
            <label for="names">Nombre completo</label>
            <input type="text" name="names"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="birthdate">Fecha nacimiento</label>
            <input type="date" name="birthdate"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password"  class=" form-control-file" required>
          </div>
          <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo"  class=" form-control-file" >
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
        </div>
      </div>
      <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
  </body>
</html>
