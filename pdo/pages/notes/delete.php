<?php include '../config/app.php'; ?>

<?php include '../config/database.php'; ?>
<?php include '../config/security-teacher.php'; ?>

<?php
if ($_GET) {
  $id = $_GET['id'];
  if (deleteNotes($id,$conn)) {
    $_SESSION['Message']="la calificaion se ha Eliminado con exito!";
    echo "<script>
    setTimeout(function(){
      window.location.replace('../mod-notes.php');
    }, 2400)
        </script>";
  }
}

 ?>


 <?php $conn = null;?>
<?php include '../includes/footer.php';?>
