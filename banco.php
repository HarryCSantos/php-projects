<?php

$contaCorrente = [12345678910 => ['titular' => 'Harry',
'saldo' => 1000], 12345678911 => ['titular' => 'Miguel',
'saldo' => 10000], 12345678912 => ['titular' => 'Maria', 'saldo' => 5000]
];

$contaCorrente[12345678910]['saldo'] -= 500;

foreach ($contaCorrente as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] .PHP_EOL;
}