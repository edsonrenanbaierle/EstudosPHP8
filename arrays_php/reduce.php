<?php

  $array = range(1, 5);

  $soma = array_reduce($array, "soma");
  $multi = array_reduce($array, "multiplicacao", 1);

  echo $soma;
  echo "<br>";
  echo $multi;


  function soma($a, $b){
    return $a + $b;
  }

  function multiplicacao($a, $b){
    return $a * $b;
  }