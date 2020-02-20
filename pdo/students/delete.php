<?php include '../config/app.php'; ?>

<?php include '../config/database.php'; ?>
<?php include '../config/security-teacher.php'; ?>

<?php
if ($_GET) {
  $id = $_GET['id'];
  if (deleteStudent($id,$conn)) {
    $_SESSION['Message']="el estudiante  Eliminado con exito!";
    echo "<script>
    setTimeout(function(){
      window.location.replace('../mod-users.php');
    }, 2400)
        </script>";
  }
}

 ?>


 <?php $conn = null;?>
<?php include '../includes/footer.php';?>
