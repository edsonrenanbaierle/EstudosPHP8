<?php

  $num = -12.5;
  $num2 = 12;

  echo "Número: ", $num2, "<br>";

  if(is_float($num)){
    echo "É float o numero: ", $num;
  }else{
    echo "Não é float o numero: ", $num;
  }