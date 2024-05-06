<?php
  require_once "Funcionario.php";

  class Gerente extends Funcionario{
    public function aumentoSalario($valor){
      $this->salario = $this->salario += $valor * 2.10;
    }
  }