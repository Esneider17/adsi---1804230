<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Sobreescritura</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5 text-center">
        <h1 class="h3">Sobreescritura _ _construct</h1>
          <?php
          class Vehicle {
            protected $brand;
            protected $refer;
            protected $color;

            public function __construct($brand, $refer){
              $this->brand = $brand;
              $this->refer = $refer;
            }
}
          class Auto extends Vehicle {
            public function __construct($brand, $refer,$color){
            parent:: __construct($brand, $refer);
            $this->color = $color;
            }
            public function getVehicle(){
              echo "<li class='list-group-item'> <strong>Marca:</strong> ".$this->brand."</li>";
              echo "<li class='list-group-item'> <strong>Referencia:</strong>".$this->refer."</li>";
              echo "<li class='list-group-item'> <strong>Color:</strong>".$this->color."</li><br>";
          }
        }
          $vh = new Auto ('Dogde', '1970 440' ,'Blanco');
          $vh->getVehicle();

          $vh = new Auto ('Audi', 'A5 Coupe','Negro' );
          $vh->getVehicle();

          $vh = new Auto ('Bugatti', 'Veyron' ,'Azul');
          $vh->getVehicle();

        ?>
      </div>
    </div>
  </div>
</body>
</html>
