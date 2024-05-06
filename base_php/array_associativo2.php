<?php

  $pessoa = [
    'nome' => 'Edson',
    'sobrenome' => 'Baierle',
    'idade' => 20,
    'cidade' => 'Monte Alverne'
  ];

  if($pessoa['idade'] > 18){
    echo "$pessoa[nome] é maior de idade";
  }else{
    echo "$pessoa[nome] não é maior de idade";
  }
?>