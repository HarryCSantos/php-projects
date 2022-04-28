<?php

$idade = 16;


echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." .PHP_EOL;
    echo "Pode entrar!";
}

else {
    echo "Infelizmente você só tem  $idade anos" . PHP_EOL;
    echo "Portanto não pode entrar!";
}