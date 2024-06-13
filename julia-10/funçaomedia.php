<?php
 
   function media($not1, $not2, $not3){
     $resmedia = ($not1 + $not2 + $not3)/3;
     return $resmedia;
   }
    
   function calc ($resmedia){
    if ($resmedia >= 8){
        echo ["Aprovado"];      
    }else if($resmedia >= 5 && $resmedia < 7){
         echo ["Recuperação"];
    }else 
       echo ["Reprovado"];
   }
   $nome = $_GET('name');
   $not1 = $_GET('not1');
   $not2 = $_GET('not2');
   $not3 = $_GET('not3');

   echo "O ($name) está: ";
   $resmedia = media ($not1 , $not2, $not3);
   calc ($resmedia);
                
   
   ?>