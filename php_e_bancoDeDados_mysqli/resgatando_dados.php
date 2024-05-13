<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new mysqli($host, $user, $password, $db);

  $id = 2;

  $stmt = $conn->prepare("SELECT * FROM item WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  //$data = $result->fetch_all();
  $data = $result->fetch_row();
  print_r($data);
