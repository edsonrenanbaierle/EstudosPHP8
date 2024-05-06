<?php

  $array = [
    'carro' => 20000,
    'sofa' => 1000 ,
    'porta' => 2,
    'casa' => 1,
    'moto' => 100000000000000
  ];
    
  print_r(itensComCustoMaiorQueDez($array));



  function itensComCustoMaiorQueDez($array){
    $arrayProdutosCustoMaiorQueDez = [];

    foreach ($array as $item => $value) {
      if($value > 10){
        array_push($arrayProdutosCustoMaiorQueDez, $item);
      }
    }

    return $arrayProdutosCustoMaiorQueDez;
  }