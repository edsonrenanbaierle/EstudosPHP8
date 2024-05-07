<?php

  print_r($_SERVER);

  echo "<br>" . $_SERVER['REQUEST_URI'];

  if($_SERVER['SERVER_PORT'] === '80'){
    echo "<br>Você se encontra na porta 80";
  }