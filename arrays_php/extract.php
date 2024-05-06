<?php

$pessoas = [
  'nome' => 'Edson',
  'idade' => 20,
  'sobrenone' => 'Baierle'
];

  extract($pessoas);

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$sobrenone <br>";


  $nome = "Joao";
  echo "$nome <br>";
  extract($pessoas);
  echo "$nome <br>";