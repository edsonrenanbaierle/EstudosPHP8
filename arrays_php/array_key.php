<?php

  $pessoas = [
    'nome' => 'Edson',
    'idade' => 20,
    'sobrenone' => 'Baierle'
  ];

  $arrayChaves = array_keys($pessoas);
  print_r($arrayChaves);
  
  echo "<br>";

  $arrayValues = array_values($pessoas);
  print_r($arrayValues);