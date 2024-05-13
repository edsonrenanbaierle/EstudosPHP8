<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

  $stmt = $conn->prepare("SELECT * FROM produto");
  $stmt->execute();

//   $dados = $stmt ->fetch(PDO::FETCH_ASSOC);
//   print_r($dados);

  $dados = $stmt ->fetchAll(PDO::FETCH_ASSOC);
  print_r($dados);
