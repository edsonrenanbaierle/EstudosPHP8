<?php
  //------------------------------------------
  // $array = ['teste', 'teste2', 'teste3', 'teste4'];
  
  // $teste = implode(', ', $array);

  // echo $teste;
  //------------------------------------------

  //------------------------------------------
  // nomeCompleto();

  // function nomeCompleto(){
  //   $firstName = "Edson";
  //   $lastName = "Baierle";

  //   echo $firstName . " " . "$lastName";
  // }
  //------------------------------------------


  //------------------------------------------


  // function parOuImpar($numero){
  //   if($numero % 2 === 0){
  //     echo "O número $numero é par";
  //   }else{
  //     echo "O número $numero é impar";
  //   }
  // }

  // parOuImpar(3);

  //------------------------------------------


  //------------------------------------------
  // function numeroAoQuadrado($numero){
  //   return $numero ** 2;
  // }

  // echo numeroAoQuadrado(8);
  // $result = numeroAoQuadrado(10);
  // echo $result;
  //------------------------------------------

  // $array = [1, 4, 8, 10, 7, 22];
  // $newArray = retornoArrayDeNumerosMaiorQue7($array);
  // print_r($newArray);

  // function retornoArrayDeNumerosMaiorQue7($array){
  //   $arrayNumerosMaiorQue7 = [];

  //   foreach ($array as $numero) {
  //     if($numero > 7){
  //       array_push($arrayNumerosMaiorQue7, $numero);
  //     }
  //   }

  //   return $arrayNumerosMaiorQue7;
  // }

  // //-------------------------------
  // function sumEvenNumbers($numero){
  //   $ind = 0;
  //   $sum = 0;
    
  //   while($ind <= $numero){
  //       if($ind % 2 === 0){
  //           $sum += $ind;
  //       }
  //       $ind++
  //   }
    
  //   return $sum;
  // }

  // sumEvenNumbers(22);


  // //-------------------------------
  // function corCarro($a = "vermelho"){
  //   return $a;
  // }

  // echo corCarro() . '<br>';
  // echo corCarro("Azul");


  // function listaParaString($array){
  //   return "Você levou esses produtos: " . implode(', ', $array);
  // }

  // echo listaParaString(['Arroz', 'Carne', 'Feijão']);

  echo isPrime(29);
    
  function isPrime($numero){
      if($numero < 2){
          return false;
      }else{
          $ind = 2;
          $contador = 1;
          while($ind <= $numero){
              
              if($numero % $ind === 0){
                  $contador++;
              }
              
              $ind++;
          }
          
          if($contador > 2){
              return false;
          }else{
              return true;
          }
      }
  }
