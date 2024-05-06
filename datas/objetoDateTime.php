<?php
  date_default_timezone_set('America/Sao_Paulo');

  $date2 = new DateTime();
  $data = new DateTime();

  print_r($data);

  echo "<br>" . date_format($data, 'd/m/Y');

  $data = new DateTime();
  echo "<br>" . $data->format('d/m/Y'). "<br>";
  $data->modify("+5 days");
  echo "<br>" . $data->format('d/m/Y'). "<br>";

  $data->setDate(2003, 11, 26);
  echo "<br>" . $data->format('d/m/Y'). "<br>";
  $data->setTime(22, 11, 22);
  echo "<br>" . $data->format('d/m/Y H:i:s'). "<br>";
