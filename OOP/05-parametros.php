<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>parametros</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="h3">Parametros (objeto/obligatorio/opcional)</h1>
        <hr>
        <?php
          class country{
            public $name;
            public function __construct($name){
              $this->name =$name;
            }
          }


          class FifaWorldCup{
            private $country;
            private $year;
            private $winner;

            public function __construct($country,$year,$winner='Brazil'){
              $this->country =$country;
              $this->year =$year;
              $this->winner =$winner;
            }

            public function showEvent(){
              echo "<ul class='list-group'>";
              echo "<li class='list-group-item'> Pais: ".$this->country->name."</li>";
              echo "<li class='list-group-item'> Año: ".$this->year."</li>";
              echo "<li class='list-group-item'> Ganador: ".$this->winner."</li>";
              echo "</ul><br>";
            }
          }

          $cn = new country('Italia');
          $fwc = new FifaWorldCup($cn,1990,'alemania');
          $fwc->showEvent();

          $cn = new country('Usa');
          $fwc =  new FifaWorldCup($cn,1994);
          $fwc->showEvent();

          $cn = new country('Francia');
          $fwc =  new FifaWorldCup($cn,1998,'Francia');
          $fwc->showEvent();

         ?>
      </div>
    </div>
  </div>
</body>
</html>
