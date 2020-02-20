<?php

//la get_declared_classes

      class VideoGame{
        // atributos
        public $nombre;
        public $platform;
        public $price;
        public $year;

        //metodos

        public function setAttributes($name,$platform,$price,$year){
          $this->name =$name;
          $this->platform =$platform;
          $this->price =$price;
          $this->year =$year;
        }
      public function getAttributes(){
        return $this->name."-".
              $this->platform."-".
              $this->price."-".
              $this->year;
      }

      }

      $vg1 = new VideoGame;
      $vg1 ->setAttributes('Pokemon espada','nintendo switch',50,2019);
      echo $vg1->getAttributes();

      echo "<hr>";
      $vg1 = new VideoGame;
      $vg1 ->setAttributes('pes 2019','xbox 360',75,2019);
      echo $vg1->getAttributes();
