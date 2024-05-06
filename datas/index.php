<?php
  date_default_timezone_set('America/Sao_Paulo');

  $dataAtual = date('d/m/y');
  echo $dataAtual . '<br>';

  $dataAtual = date('D/M/Y');
  echo $dataAtual . '<br>';

  $dataAtual = date('d, M - Y, h:i:s', strtotime('4 Hour'));
  echo $dataAtual . '<br>';