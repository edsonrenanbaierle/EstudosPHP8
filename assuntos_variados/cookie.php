<?php
  setcookie('nome', 'Edson', time() + 4000);

  $nome = $_COOKIE['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Nome: <?php echo $nome?></h1>
</body>
</html>