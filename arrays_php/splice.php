<?php

  $array = range(0, 20);

  $newArray = array_splice($array, 10, -5);
  print_r($newArray);