<?php
  require_once 'Funcionario.php';
  require_once 'Gerente.php';


  $edson = new Funcionario("Edson", "Baierle", 20, 1000);
  echo "Nome: " . $edson->getNome() . " Sobrenome: " . $edson->getSobrenome() . " Idade: " . $edson->getIdade () . "Salario: " . $edson->getSalario();

  $edson->aumentoSalario(1000);

  echo "<br>";
  
  echo "Nome: " . $edson->getNome() . " Sobrenome: " . $edson->getSobrenome() . " Idade: " . $edson->getIdade () . "Salario: " . $edson->getSalario();


  echo "<br>Gerente <br>";
  $Jose = new Gerente("Jose", "Baierle", 50, 1000);

  echo "Nome: " . $Jose->getNome() . " Sobrenome: " . $Jose->getSobrenome() . " Idade: " . $Jose->getIdade () . "Salario: " . $Jose->getSalario();

  echo "<br>";
  $Jose->aumentoSalario(1000);

  echo "Nome: " . $Jose->getNome() . " Sobrenome: " . $Jose->getSobrenome() . " Idade: " . $Jose->getIdade () . "Salario: " . $Jose->getSalario();