<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="h3 text-center"> colaboracion</h1>
        <hr>
        <ul class="list-group">


          <?php
          class Evolve{
            public function evolvePokemon($curr,$evol){
              echo "<li class='list-group-item'>";
              echo $curr." =>".$evol;
              echo "</li>";
            }
          }
          class Pokemon{
            private $curr;
            private $evol;
            private $colla;


            public function __construct($curr,$evol){
              $this->curr =$curr;
              $this->evol =$evol;
              //colaboracion
              $this->colla = new Evolve;
            }
            public function nextLevel(){
              $this->colla->evolvePokemon($this->curr,$this->evol);
            }

          }

          $pk1 = new Pokemon('pichu','pikachu');
          $pk1->nextLevel();

          $pk2 = new Pokemon('pikachu','Raichu');
          $pk2->nextLevel();

          $pk3 = new Pokemon('squirtle','Wartortle');
          $pk3->nextLevel();

          $pk4 = new Pokemon('wartortle','Blastoise');
          $pk4->nextLevel();

          
          $pk5 = new Pokemon('bullbasaur','ivysaur');
          $pk5->nextLevel();


          $pk6 = new Pokemon('ivysaur','venusaur');
          $pk6->nextLevel();

          ?>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
