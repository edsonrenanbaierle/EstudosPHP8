<?php

  $data1 = new DateTime();
  $data2 = new DateTime();

  $data1->modify("+6 days");

  $diferenca = $data1->diff($data2);
  echo $diferenca->format('%a');