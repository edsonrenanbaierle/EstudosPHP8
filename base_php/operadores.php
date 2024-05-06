<?php

  if(3 <= 4 && 7 > 4){
    echo "é menor igual <br>";
  }else{
    echo "não é menor igual<br>";
  }

  if(!(6 >= '7' || 2 > 1)){
    echo "é menor igual  <br>";
  }else{
    echo "não é menor igual  <br>";
  }

  echo '<br>';
  $string = 22.1222222;
  echo getType($string);
  
  echo '<br>';
  $string = (string) $string;
  echo getType($string) . "$string";

  echo '<br>';

  $num1 = -1;
  $num3 = 1;

  echo $num1 > $num3? "$num1 é maior que $num3": "$num1 é menor que $num3";
  