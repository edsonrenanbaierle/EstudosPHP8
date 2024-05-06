<?php

  $array = range(1, 100);

  $newArray = array_chunk($array, 10);

  for ($i=0; $i < count($newArray); $i++) { 
    for ($j=0; $j < count($newArray[$i]); $j++) { 
      echo $newArray[$i][$j] . " ";
    }
    echo "<br>";
  }