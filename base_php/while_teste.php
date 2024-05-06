<?php

  // $array = ['ola', 2, true, 'opa', 2, 54, false, 'opa2', 332, 9, "edson"];
  // $x = 0;

  // while($x < sizeof($array)){
  //   if(is_string($array[$x])){
  //     echo $array[$x] . "<br>";
  //   }
  //   $x++;
  // }


  //outro codigo
  // $x = 4;

  // while($x < 30){

  //   echo "O valor de X é: $x <br>";

  //   if($x === 24){
  //     echo "Encerrando o programa...";
  //     break;
  //   }

  //   $x += 2;
  // }


  //outro codigo
  $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
  $ind = 0;

  while($ind < count($array)){

    if($array[$ind] === 30 || $array[$ind] === 40){
      $ind++;
      continue;
    }
    echo "Número $array[$ind] <br>";

    $ind++;
  }

