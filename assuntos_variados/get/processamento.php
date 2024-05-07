<?php

  print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Seu nome é <?php echo $_GET['nome'] ?></h1>
</body>
</html>