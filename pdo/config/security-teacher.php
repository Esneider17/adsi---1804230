<?php

if (!isset($_SESSION['unames'])) {
  $_SESSION['error']="debe iniciar Sesion";
  echo "<script>window.location.replace('index.php');</script>";
}else {
      if ($_SESSION['urole']!="Teacher") {
        $_SESSION['error'] = "acceso denegado";
        echo "<script>
        setTimeout(function(){
          window.location.replace('index.php');
        }, 1000);
        </script>";
      }
}
 ?>
