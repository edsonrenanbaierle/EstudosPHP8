<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $stmt = $conn->prepare("UPDATE produto SET name=:name, description=:description WHERE id = :id");

  $name = 'Cadeira';
  $description = "Cadeira Usada";
  $id = 6;

  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":description", $description);
  $stmt->bindParam(":id", $id);

  $stmt->execute();