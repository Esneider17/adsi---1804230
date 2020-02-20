<?php

if (isset($_SESSION['unames'])) {
  if ($_SESSION['urole']=='Teacher') {
    echo "<script>window.location.replace('dashboard-Teacher.php')</script>";
  }
  echo "<script>window.location.replace('dashboard-Student.php')</script>";
}


 ?>
