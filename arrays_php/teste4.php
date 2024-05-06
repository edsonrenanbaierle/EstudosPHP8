<?php
    print_r(ordenarNumeros([22, 545, 321, 321, 65, 431]));
    
    function ordenarNumeros($array){
        sort($array);
        return $array;
    }