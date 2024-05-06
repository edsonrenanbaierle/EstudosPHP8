<?php

  $array = ["Edson", "Renan", "Baierle", 20];
  print_r($array);

  list($nome, $nomeDoMeio, $sobrenome, $idade) = $array;

  echo "<br>";
  echo $nome . "<br>";
  echo $nomeDoMeio . "<br>";
  echo $sobrenome . "<br>";
  echo $idade . "<br>";