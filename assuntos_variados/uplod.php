<?php

  if(isset($_FILES)){
    print_r($_FILES);
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
  <form action="uplod.php" method="post" enctype="multipart/form-data">
    <div>
      <input type="file" name="imagem">
    </div>
    <div>
      <button type="submit">Enviar</button>
    </div>

  </form>
</body>
</html>