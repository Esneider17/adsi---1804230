<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Interfaces</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 mt-5">
        <h1 class="h3 text-center">Interfaces</h1>
        <hr>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="file" class="form-control-file" name="foto" accept="image/*">
          </div>
          <div class="form-group">
            <button class="btn btn-success" type="submit"> Subir Foto </button>
          </div>
        </form>

        <ul class="list-group">
          <?php
          interface  Photo{
            public function upLoadPhoto($file);
          }

          class Upload implements Photo{
            private $file;

              public function upLoadPhoto($file){

                move_uploaded_file($_FILES['foto']['tmp_name'],$file);
                echo "<div class='alert-success'>la foto fue subida con exito !!.</div>";
              }

          }
          if ($_FILES) {
            $pt = new Upload();
            $pt->upLoadPhoto('uploads/'.$_FILES['foto']['name']);

          }

          ?>
        </ul>

      </div>
    </div>
  </div>
</body>
</html>
