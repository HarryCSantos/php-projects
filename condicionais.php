<?php

$idade = 17;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18) {
    echo "Você tem $idade anos." .PHP_EOL;
    echo "Pode entrar";
}

else {
    echo "Infelizmente você não tem mais de 18 anos" . PHP_EOL;
    echo "Portanto não pode entrar!";
}