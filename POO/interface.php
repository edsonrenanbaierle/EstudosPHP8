<?php
  interface falas{
    public function fala1();

    public function fala2();

    public function fala3();
  }

  class Humano implements falas{
    public function fala1(){
      echo "Ola <br>";
    }

    public function fala2(){
      echo "Opa <br>";
    }

    public function fala3(){
      echo "Salve <br>";
    }
  }

  $edson = new Humano();
  $edson->fala1();
  $edson->fala2();
  $edson->fala3();