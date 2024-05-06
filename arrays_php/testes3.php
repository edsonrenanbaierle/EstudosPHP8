<?php
  $array = [
    "edson" => 8,
    "joao" => 3,
    "gabriel" => 7,
    "clair" => 10,
  ];

  arsort($array);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordenação por pontos</title>
</head>
<body>
  <ol>
    <?php foreach ($array as $key => $value): ?>
      <li><?php echo "$key pontuação: $value"?></li>
    <?php endforeach ?>
    </ol>
</body>
</html>