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
    echo $mensagem . '<br>';
}

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0)
    {
        $conta['saldo'] += $valorADepositar;
    } else
      {
          exibeMensagem("Depositos precisam ser positivos");
      }
    
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{ 
    $conta['titular'] = strtoupper($conta['titular']); 

    echo $conta['titular'] . PHP_EOL;
}

function exibeConta (array $conta)
{
    $html = "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}