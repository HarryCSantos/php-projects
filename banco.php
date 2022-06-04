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
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
<body>
    <h1>Contas Correntes access unit sequence mental vicio tentando um novo dia entrevista 03/06 nao passei cry tolima health jjj,lj duolingo familia DEUS e o caminho</h1>
    <dl>
        <?php foreach($contaCorrente as $cpf => $conta)
        { ?>
            
        
        <dt>
            <h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?php echo $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>



