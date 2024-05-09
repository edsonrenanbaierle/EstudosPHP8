<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new mysqli($host, $user, $password, $db);

  $name = 'Baralho de carta';
  $quantity = 7;

  $stmt = $conn->prepare("INSERT INTO item (name, quantity) VALUES (?, ?)");
  $stmt->bind_param("si", $name, $quantity);
  $stmt->execute();