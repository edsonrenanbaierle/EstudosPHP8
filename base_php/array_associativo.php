<?php

  $carro = ['nome' => 'camarro', 'ano' => 1900, 'cor' => 'amarelo'];

  echo "$carro[nome] é de $carro[ano] de cor $carro[cor] <br>";
  print_r($carro);

  if(is_array($carro)){
    echo "Teste";
  }

  echo $carro['ano'];