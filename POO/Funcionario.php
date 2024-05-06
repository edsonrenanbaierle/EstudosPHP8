<?php

  class Funcionario{
    protected $nome;
    protected $sobrenome;
    protected $idade;
    protected $salario;

    public function __construct($nome, $sobrenome, $idade, $salario) {
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->idade = $idade;
      $this->salario = $salario;
    }

    public function getIdade(){
      return $this->idade;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getSobrenome(){
      return $this->sobrenome;
    }

    public function setIdade($idade){
      $this->idade - $idade;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function setSobrenome($sobrenome){
      $this->sobrenome = $sobrenome;
    }

    public function getSalario(){
      return $this->salario;
    }

    public function aumentoSalario($valor){
      $this->salario += $valor;
    }
  }

