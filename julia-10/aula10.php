<?php
    //definição da função
    function soma($n1, $n2){
    $res = $n1+$n2;
    echo "\nsoma: {$res}";
    }
    //chamada da função\ invocação
     soma(1,1);
     soma(4,20);
      $retornofuncao = sub(3,2);
       
    //definicao da funçao
     function sub($n1, $n2){
       $res = $n1 - $n2;
         return $res;
     }

       function calcular($n1, $n2){
          echo "   o resultado da soma:"; 
          Soma($n1, $n2);
          $resSub = sub ($n1, $n2);
           echo "\n Subtracao: {$resSub}";
       }

?>
