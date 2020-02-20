<!-- Page Wrapper -->
<div id="wrapper">
  <!-- Sidebar -->
  <?php include 'menu-teacher.php'; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
          <?php include 'navbar-teacher.php' ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">

                <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-pen"></i> Modificar Notas

                </h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6  mb-4 ">

                <form class="" action="" method="post" enctype="multipart/form-data">
                  <?php $id = $_GET['id']; ?>
                  <?php $note = showNotes($id,$conn); ?>
                  <?php foreach ($note as $nt): ?>
                  <div class="form-group">
                    <?php $students = listStudents($conn); ?>
                    <label for="user_id">Nombre Estudiante</label>
                    <select class="form-control" name="user_id">
                      <option value="">seleccione...</option>
                      <?php foreach ($students as $student ): ?>
                        <option value="<?php echo $student['id']; ?>"<?php if($student['status']=="InActive") echo "disabled"; ?><?php if($nt['user_id']==$student['id'])echo "selected" ?>><?php echo $student['names']; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <?php $subjects = listSubjects($conn); ?>
                    <label for="subject_id">Nombre Materia</label>
                    <select class="form-control" name="subject_id">
                        <option value="">seleccione...</option>
                      <?php foreach ($subjects as $subject ): ?>
                        <option value="<?php echo $subject['id']; ?>"<?php if($nt['subject_id']==$subject['id'])echo "selected" ?>><?php echo $subject['name']; ?>"</option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nt1">Nota 1</label>
                    <input type="number" name="nt1"  class="form-control"  step="0.1" min="0" max="5" required value="<?php echo $nt['nt1'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nt2">Nota 2</label>
                    <input type="number" name="nt2"  class="form-control" step="0.1" min="0" max="5" required value="<?php echo $nt['nt2'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nt3">Nota 3</label>
                    <input type="number" name="nt3"  class="form-control"  step="0.1" min="0" max="5"required value="<?php echo $nt['nt3'] ?>">
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
                <?php endforeach ?>
                </form>
                <?php
                if($_POST) {
                  // $id = $_POST['id'];
                  $nt1     =$_POST['nt1'];
                  $nt2 =$_POST['nt2'];
                  $nt3     =$_POST['nt3'];
                  $user_id  =$_POST['user_id'];
                  $subject_id  =$_POST['subject_id'];


                  if(updateNotes($id,$nt1,$nt2,$nt3,$user_id,$subject_id,$conn)){
                      $_SESSION['Message']="las notas se modificaron con exito!";
                      echo "<script>
                      setTimeout(function(){
                        window.location.replace('../mod-notes.php');
                      }, 1200)
                          </script>";

                  }

                }
                ?>


                </div>
              </div>
              <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->
          <!-- Footer -->
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
