<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>welcome</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
          <h1> <i class="fa fa-users"></i>Welcome</h1>
          <hr>
          <a href="?method=add" class="btn btn-success mb-3 ">
            <i class="fa fa-plus"></i>
            Adicionar Usuario

          </a>
          <hr>
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Nombre completo</th>
                <th>fecha Nacimiento</th>
                <th>Correo Electronico</th>
                <th>Rol</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while($row = mysqli_fetch_array($data)){
                ?>
                 <tr>
                 <td><?php echo  $row['names'] ?></td>
                 <td><?php echo  $row['birthdate']?></td>
                 <td><?php echo  $row['email'] ?></td>
                 <td><?php echo  $row['role']?></td>
                 <td>
                   <a href="?method=show&id=<?php echo $row['id']?>" class="btn btn-light btn-sm"><i class="fa fa-search"></i></a>
                   <a href="?method=edit&id=<?php echo $row['id']?>" class="btn btn-light btn-sm"><i class="fa fa-pencil"></i></a>
                   <a href="?method=delete&id=<?php echo $row['id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                 </td>

                  </tr>
                <?php
              }

               ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
