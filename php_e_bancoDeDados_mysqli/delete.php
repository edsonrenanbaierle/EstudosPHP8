<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new mysqli($host, $user, $password, $db);

  $stmt = $conn->prepare("DELETE FROM produto WHERE id = ?");

  $id = 5;


  $stmt->bind_param('i', $id);
  $stmt->execute();

  if($stmt->error){
    echo "Error: " . $stmt->error;
  }

  $stmt->close();