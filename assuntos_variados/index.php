<?php
   $nome2 = $_COOKIE['nome'];

  $method =  $_SERVER['REQUEST_METHOD'];

  if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Teste Cokkie Nome: <?php echo $nome2 ?></h1>
  <?php
    if($method == 'GET'):
  ?>
  <form action="index.php" method="post">
    <div>
      <input type="text" name="nome" placeholder="Digite seu Nome">
    </div>
    <div>
      <button type="submit">Enviar</button>
    </div>
  </form>
  <?php
    else:
  ?>

  <h1>O seu nome é <?php echo $nome ?></h1>

  <?php
    endif;
  ?>
</body>
</html>