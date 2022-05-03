<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contaCorrente = [12345678910 => ['titular' => 'Harry',
'saldo' => 1000], 12345678911 => ['titular' => 'Miguel',
'saldo' => 10000], 12345678912 => ['titular' => 'Maria', 'saldo' => 5000]
];

$contaCorrente['12345678910'] = sacar($contaCorrente['12345678910'], 2500 );

foreach ($contaCorrente as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}



