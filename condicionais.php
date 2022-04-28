<?php

$idade = 34;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou "; 
echo "a partir de 16 anos acompanhado" .PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos . Pode entrar sozinho.";
}

else {
    echo "Infelizmente você só tem  $idade anos. Você não pode entrar.";
}