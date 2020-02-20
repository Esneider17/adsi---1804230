  <!-- Bootstrap core JavaScript-->
<script src="<?php echo $vendor; ?>jquery/jquery.min.js"></script>
<script src="<?php echo $vendor; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $vendor; ?>jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo $vendor; ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $vendor; ?>datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $js; ?>sb-admin-2.min.js"></script>
<script src="<?php echo $js; ?>sweetalert2.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#dataTable').DataTable({
        "language":{
          "url":"<?php echo $vendor; ?>dataTables/Spanish.json"
        }
  });
  <?php if (isset($_SESSION['Message'])): ?>
  Swal.fire(
  'Great!',
  '<?php echo $_SESSION['Message'] ?>',
  'success'
);
<?php unset($_SESSION['Message']); ?>
<?php endif ?>
<?php if (isset($_SESSION['error'])): ?>
Swal.fire(
'Error!',
'<?php echo $_SESSION['error'] ?>',
'error'
);
<?php unset($_SESSION['error']); ?>
<?php endif ?>
});
$('.btn-delete').click(function(event) {
  $id = $(this).attr('data-id');
  $dir =$(this).attr('data-dir');
  Swal.fire({
    title: 'Esta usted seguro?',
    text: "Desea eliminar este registro",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#1cc88a',
    cancelButtonColor: '#e74a3b',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'OK'
  }).then((result) => {
    if (result.value) {
      window.location.replace($dir+'/delete.php?id='+$id);
    }
  })
});



</script>

</body>

</html>
