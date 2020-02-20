<?php

if (!isset($_SESSION['unames'])) {
  $_SESSION['error']="debe iniciar Sesion";
  echo "<script>
  setTimeout(function(){
    window.location.replace('index.php');
  }, 1200);
  </script>";
}else {
      if ($_SESSION['urole']!="Student") {
        $_SESSION['error'] = "acceso denegado";
        echo "<script>
        setTimeout(function(){
          window.location.replace('index.php');
        }, 1000);
        </script>";
      }
}
 ?>
