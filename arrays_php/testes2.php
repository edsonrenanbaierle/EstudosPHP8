<?php

  $array = [
    'Edson' => 20,
    'Joao' => 21,
    'Caua' => 20
  ];

?>

  <table border="1">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($array as $key => $value): ?>
        <tr>
          <td scope="row"><?php echo $key ?></td>
          <td><?php echo $value ?></td>
        </tr>
      <?php endforeach; ?>
    <tbody>
  </table>