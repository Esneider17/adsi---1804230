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
      <div class="col-md-8 offset-md-2 mt-5">
        <h1 class="h3 text-center">Instance Of</h1>
        <hr>
        <ul class="list-group">
          <?php

           class Bike{
             protected $brand;
             protected $price;
             protected $type;

             public function __construct($brand ,$price){
               $this->brand =$brand;
               $this->price =$price;

             }
             public function setBike($type){
               if ($type instanceof road)   $this->type='road';
               if ($type instanceof mtb)    $this->type='mtb';
               if ($type instanceof enduro) $this->type='enduro';


             }

             public function getInfoBike(){
               return "<li class 'list-group-item'>".$this->brand."-".$this->price."-".$this->type."</li>";
             }
           }

           class road extends Bike{}
           class mtb extends Bike{}
           class enduro extends Bike{}



              $bk = new road('Specialized',4000);
              $bk->setBike($bk);
              echo $bk->getInfoBike();

              $bk = new mtb('Trek',3200);
              $bk->setBike($bk);
              echo $bk->getInfoBike();

              $bk = new enduro('Santa cruz',5200);
              $bk->setBike($bk);
              echo $bk->getInfoBike();
        ?>
        </ul>

      </div>
    </div>
  </div>
</body>
</html>
