<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Nombre espacios</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 mt-5">
        <h1 class="h3 text-center">Nombre espacios</h1>
        <hr>

        <ul class="list-group">
          <?php

            include 'electric/Pokemon.php';
            include 'fire/Pokemon.php';
            include 'water/Pokemon.php';

            use \electric\Pokemon as Pke;
            use \fire\Pokemon as Pkf;
            use \water\Pokemon as Pkw;


            $pk = new Pke('pikachu','yellow');
            echo  $pk->getInfoPokemon();

            $pk = new Pkf('charmander','orange');
            echo  $pk->getInfoPokemon();

            $pk = new Pkw('squirtle','aqua');
            echo  $pk->getInfoPokemon();
          ?>
        </ul>

      </div>
    </div>
  </div>
</body>
</html>
