<?php

  $marca = "BMW";
  $cor = "Azul";
  $array = compact("marca", "cor");

  print_r($array);
  echo "<br>";
  foreach ($array as $key => $value) {
    echo $value . "<br>";
  }