<?php

  $array = range(1, 10);

  $newArray = array_slice($array, 4, -2);

  print_r($array);
  echo '<br>';
  print_r($newArray);