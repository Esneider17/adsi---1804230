
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

		<?php

			class PlayList{
				//Atributos
				private $name;
				private $artist = array();
				private $album = array();
				private $image = array();
				private $year = array();
				private $type = array();

				//Metodo Constructor
				public function __construct($nm){
					$this->name	= $nm;

				}
				public function setPlayList($ar, $al,$im, $y, $t){
					$this->artist[]	= $ar;
					$this->album[]	= $al;
					$this->image[]	= $im;
					$this->year[]	= $y;
					$this->type[]	= $t;

				}
				public function getPlayList(){
					for ($i=0; $i < count($this->artist) ; $i++) {

				echo	"<div class=' col-md-4 mt-5'>";
				echo	"<div class='card'>";
  			echo "<img src='".$this->image[$i]."' class='card-img-top'>";
				echo "<div class='card-body'>";
    		echo "<h5 class='card-title'>".$this->name."</h5>";
  			echo "</div>";
  			echo"<ul class='list-group list-group-flush'>";
    					echo "<li class='list-group-item'>".$this->artist[$i]."</li>";
    					echo "<li class='list-group-item'>".$this->album[$i]."</li>";
    					echo "<li class='list-group-item'>".$this->year[$i]."</li>";
    					echo "<li class='list-group-item'>".$this->type[$i]."</li>";
  						echo"</ul>";
							echo "</div>";
							echo "</div>";
					}
				}
			}
		  $pl = new PlayList(' Variada 2019 !');
			$pl -> setPlayList('Rammstein', 'Rosenrot','https://images-na.ssl-images-amazon.com/images/I/51ajuLM77WL.jpg', 2005,'Metal Gótico');
			$pl -> setPlayList('slipknot', 'slipknot','http://tiny.cc/5xfchz', 1999, 'Heavy Metal');
			$pl -> setPlayList('System Of a Down', 'Hypnotize','http://tiny.cc/t3fchz', 2005, 'Heavy Metal');
			$pl->getPlayList();
			?>
		</div>
	</div>
	</body>
</html>
