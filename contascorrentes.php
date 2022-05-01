<?php

$conta1 = ['titular' => 'Harry', 'saldo' => 1000];
$conta2 = ['titular' => 'Miguel', 'saldo' => 10000];
$conta3 = ['titular' => 'Maria', 'saldo' => 5000];

$contaCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrente); $i++) {
    echo $contaCorrente[$i]['titular'] .PHP_EOL;
}