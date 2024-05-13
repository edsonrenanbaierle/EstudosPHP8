<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $stmt = $conn->prepare("INSERT INTO produto (name, description) VALUES (:name, :description)");

  $name = 'Mesa usada';
  $description = "Mesa de vidro usada";

  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":description", $description);

  $stmt->execute();