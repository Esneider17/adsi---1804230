<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>trait (rasgos/caracteriticas)</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="h3 text-center">trait (rasgos/caracteriticas)</h1>
        <hr>

        <ul class="list-group">
          <?php

            trait HelloWorld{
              public function sayHello($name){
                echo "<li  class=list-group-item'> Bienvenido: ".$name;
              }
            }

              trait Adsi{
                public function sayCode($code){
                  echo " |Programa " .$code;
                }

            }

            class Department{
               use HelloWorld, Adsi;
               public function sayDepartment($dep){
                 echo " | Regional " .$dep. "</li>";
               }
            }

            $hll = new Department;
            $hll->sayHello('Esneider Springfield');
            $hll->sayCode('1804230');
            $hll->sayDepartment('caldas');


          ?>
        </ul>
          <hr>
      </div>
    </div>
  </div>
</body>
</html>
