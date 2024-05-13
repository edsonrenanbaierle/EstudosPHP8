<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new mysqli($host, $user, $password, $db);

  $sql = "DELETE FROM item WHERE id=8";
  $sql1 = "SELECT * FROM item";


  $result = $conn->query($sql1);

  //um resultado
  $items = $result->fetch_assoc();

  //todos
  $items = $result->fetch_all();
  print_r($items);

  $conn->close();