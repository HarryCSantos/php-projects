<?php

$peso = 74;
$altura = 1.80;
$imc = $peso / $altura **2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 10) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro ";
} else {
    echo "acima";
}

echo "do recomendado";