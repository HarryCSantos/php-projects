<?php

require_once 'funcoes.php';

$contaCorrente = [12345678910 => ['titular' => 'Harry',
'saldo' => 1000], 12345678911 => ['titular' => 'Miguel',
'saldo' => 10000], 12345678912 => ['titular' => 'Maria', 'saldo' => 5000]
];

$contaCorrente['12345678910'] = sacar($contaCorrente['12345678910'], 2500 );

$contaCorrente[12345678911] = depositar($contaCorrente[12345678911], 1000);

titularComLetrasMaiusculas($contaCorrente['12345678910']);

echo "<ul>";
foreach ($contaCorrente as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";



