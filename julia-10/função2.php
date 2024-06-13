<?php
function calcularImc($peso, $altura)
{
    $imc = $peso / (pow($altura, 2));
    return $imc;
}

function situation($imc)
{
    if ($imc < 16) {
        echo "O imc é: " . $imc . ", situation: Baixo peso";
    } else if ($imc >= 16 && $imc <= 25) {
        echo "O imc é: " . $imc . ", situation: saudável";
    } else {
        echo "O imc é: " . $imc . ", situation: Sobre peso";
    }
}
$peso = $_GET["peso"];
$altura = $_GET["alt"];

$peso1 = (double) $peso;
$altura1 = (double) $altura;
//var_dump($peso1);
//var_dump($altura1);

$imc = calcularImc($peso1, $altura1);
situation($imc);


?>