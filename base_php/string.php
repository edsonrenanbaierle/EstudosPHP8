<?php

  // $str = "Edson";
  // $str2 = 'teste';
  // $int = 2;

  // echo "$str <br>";
  // echo "$str2 <br>";

  // if(is_string($str2)){
  //   echo "$str2 é string";
  // }

  //---------------------------------
  // $str = "O rato roeu a roupa do rei de roma";
  // $count = 0;
  
  // for ($i=0; $i < strlen($str); $i++) { 
    
  //   if($str[$i] === "a"){
  //     $count++;
  //   }
  // }

  // echo "O número de a na frase é: $count";
  //---------------------------------


  // $str = "este item está em ";
  // $str2 = "promoção";

  // echo ucfirst($str) . strtoupper($str2);
  // echo substr($str, 5, 4);

  // $str2 = "22/11/22";
  // print_r(explode("/", $str2));

  // $str3 = "carro - navio - moto";
  // print_r(explode("-", $str3));

  $array = ["meu", "nome", "é", "edson"];
  echo implode(" ", $array);

  $str = "O rato roeu a roupa do rei de roma";
  echo substr($str, strpos($str, "roupa"), 5);