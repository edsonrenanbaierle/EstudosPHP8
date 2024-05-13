<?php

    $host = "localhost";
    $dbName = "agenda";
    $user = "root";
    $pass = "";

    try {
        
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);

        //ativar caso ocorrra um erro
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        //error conexao
        $error = $e->getMessage();
        echo "Error: $error";
    }