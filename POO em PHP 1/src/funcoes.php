<?php

function depositar(array $conta, float $valorADepositar): array
{

    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('Depositos precisam ser positivos');
    }

    return $conta;
}

function sacar(array $conta, float $valorASacar): array
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
};

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['nome'] = mb_strtoupper($conta['nome']);

    
}

function exibeConta( array $conta){
    ['nome' => $nome, 'saldo' => $saldo] = $conta;

    echo "<li> Nome: $nome. Saldo: $saldo </li>";
}
