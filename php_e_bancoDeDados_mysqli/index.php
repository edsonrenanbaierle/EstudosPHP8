<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "curso";

  $conn = new mysqli($host, $user, $password, $db);

  

  if($conn->connect_error){
    echo "erro na conexao";
    echo "Erro: " . mysqli_connect_error();
  }