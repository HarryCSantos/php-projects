<?php

$idade = 17;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18) {
    echo "Você tem $idade anos. Pode entrar";
}

else {
    echo "Infelizmente você não tem mais de 18 anos portanto não pode entrar!";
}