<?php

  $array = range(10, 45);

  foreach ($array as $element) {
    $soma = $element + 6;

    if($soma > 30){
      echo "Soma maior que 30, está em $soma<br>";
    }else{
      echo $soma . "<br>";
    }
  }
