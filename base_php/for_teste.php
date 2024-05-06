<?php

  // $array = [1, 2, 3, 4, 5, 10, 11, 12, 13, 14, 15];

  // for ($i=0; $i < count($array); $i++) { 
  //   $numberAtual = $array[$i];
  //   if($numberAtual % 2 === 0){
  //     echo "$numberAtual é par <br>";
  //   }
  // }

  /////////////////////

  $array = [];

  for ($i=10; $i <= 20; $i++) { 
    array_push($array, $i);
  }

  for ($i=0; $i < count($array); $i++) { 
    if($array[$i] % 2 === 1){
      echo "Numero $array[$i] impar <br>";
    }
  }
  echo "<br>";
  foreach ($array as $item) {
    echo "$item <br>";
  }