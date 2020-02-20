<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Clase abstracta</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5 text-center">
        <h1 class="h3">Clase abstracta</h1>
        <hr>
        <table class="table table-hover table-striped ">
          <thead>
            <tr>
              <th>nombre</th>
              <th>fecha nacimiento</th>
              <th>correo</th>
              <th>rol</th>
            </tr>
          </thead>
          
          <?php
           abstract class DataBase {
              protected $host;
              protected $user;
              protected $pass;
              protected $dbnm;
              protected $conx;

              public function __construct($host ='localhost', $user='root',$pass='',$dbnm='adsi1804230'){
                $this->host=$host;
                $this->user=$user;
                $this->pass=$pass;
                $this->dbnm=$dbnm;
                $this->connect();

              }

              private function connect(){
                $this->conx = mysqli_connect(  $this->host,  $this->user,  $this->pass,  $this->dbnm);
              }
              protected function disconnect(){
                mysqli_close(  $this->conx);
              }
            }


            class User extends DataBase{
              private $rs;
             public function listUsers(){
                  $this->rs=mysqli_query($this->conx ,"SELECT * FROM users");
                  while($row = mysqli_fetch_array($this->rs)){
                    echo "<tr>";
                    echo "<td>".$row['names']."</td>";
                    echo "<td>".$row['birthdate']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['role']."</td>";
                    echo "</tr>";
                  }
                  parent::disconnect();
             }
            }

            $user =new User();
            $user->listUsers();

        ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
