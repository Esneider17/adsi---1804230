<?php

class Model  extends DataBase{
  public function listUsers(){
    return mysqli_query($this->conx ,"SELECT * FROM users");
  }
  public function showUsers($id){
    return mysqli_query($this->conx ,"SELECT * FROM users WHERE id =$id");
  }
  public function deleteUsers($id){
    return mysqli_query($this->conx ,"DELETE FROM  users WHERE id =$id");
  }


  public function addUsers(){
      $names     =$_POST['names'];
      $birthdate =$_POST['birthdate'];
      $email     =$_POST['email'];
      $password  =md5($_POST['password']);
      $path      ="../imgs/";
      $photo     =$path.time().".".pathinfo($_FILES['photo']['name'],
      PATHINFO_EXTENSION);
      move_uploaded_file($_FILES['photo']['name'],$photo);
      return mysqli_query($this->conx, "INSERT INTO users VALUES (DEFAULT,'$names','$birthdate','$email','$photo',DEFAULT, '$password',DEFAULT)");

      // if(saveStudent($names,$birthdate,$email,$photo,$password,$conn)){
      //   $_SESSION['Message']="el estudiante $names se adiciono con exito!";
      //   echo "<script>
      //   setTimeout(function(){
      //     window.location.replace('../welcome.php');
      //   }, 1200)
      //   </script>";
      //
      // }

  }
  public function updUser() {
      $id        =$_POST['id'];
      $names     =$_POST['names'];
      $birthdate =$_POST['birthdate'];
      $email     =$_POST['email'];
      $path      ="public/imgs/";
      if (!empty($_FILES['photo']['name'])) {
        $path = "public/imgs/";
        $photo     =$path.time().".".pathinfo($_FILES['photo']['name'],
        PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['photo']['tmp_name'],$photo);

          return mysqli_query($this->conx, "UPDATE users SET names = '$names', birthdate = '$birthdate', email = '$email',photo = '$photo' WHERE id = $id");
        }else {
          return mysqli_query($this->conx, "UPDATE users SET names = '$names', birthdate = '$birthdate', email = '$email' WHERE id = $id");

      }
    }
  
  }
