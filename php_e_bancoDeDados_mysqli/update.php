<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new mysqli($host, $user, $password, $db);

  $stmt = $conn->prepare("UPDATE produto SET name = ?, description = ? WHERE id = ?");

  $name = 'Guarda Roupa';
  $description = 'Objeto para guardar suas roupas';
  $id = 4;


  $stmt->bind_param('ssi', $name, $description, $id);
  $stmt->execute();

  if($stmt->error){
    echo "Error: " . $stmt->error;
  }