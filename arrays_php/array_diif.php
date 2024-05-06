<?php

  $array1 = [1, 2, 5, 6];
  $array2 = [1, 3, 5, 8];

  $newArray = array_diff($array1, $array2);

  print_r($newArray);