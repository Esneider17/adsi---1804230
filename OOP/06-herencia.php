<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Herencia</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="h3 text-center">Herencia</h1>

        <?php

        class Operacion{
          protected $n1;
          protected $n2;
          protected $rs;

        public function  __construct($n1,$n2){
            $this->n1 =$n1;
            $this->n2 = $n2;
          }
          public function imprimirResultado(){

            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'> resultado : ". $this->rs."</li>";
            echo "</ul><br>";
          }
        }

        class Sum extends Operacion{
          public function calcular(){
          return  $this->rs = "la Suma de ".$this->n1." y "  .$this->n2." = ".($this->n1 + $this->n2);
          }
        }
        class Subtract extends Operacion{
          public function calcular(){
            return  $this->rs = "la Resta es ".$this->n1." menos "  .$this->n2." = ".($this->n1 - $this->n2);
          }
        }
        class Division extends Operacion{
          public function calcular(){
            return  $this->rs = "la Division de ".$this->n1." entre "  .$this->n2." = ".($this->n1 / $this->n2);
          }
        }
        class Multiplication extends Operacion{
          public function calcular(){
            return  $this->rs = "la Multiplicacion es ".$this->n1." por "  .$this->n2." = ".($this->n1 * $this->n2);
          }
        }
        class Exponent extends Operacion{
          public function calcular(){
            return  $this->rs = "el Numero  ".$this->n1." elevado a la "  .$this->n2." = ".pow($this->n1 , $this->n2);
          }
        }



        $rs = new Sum(7,23);
        $rs->calcular();
        $rs->imprimirResultado();

        $rs = new Subtract(89,45);
        $rs->calcular();
        $rs->imprimirResultado();

        $rs = new Division(50,10);
        $rs->calcular();
        $rs->imprimirResultado();


        $rs = new Multiplication(10,10);
        $rs->calcular();
        $rs->imprimirResultado();

        $rs = new Exponent(4,3);
        $rs->calcular();
        $rs->imprimirResultado();


         ?>
      </div>
    </div>
  </div>
</body>
</html>
