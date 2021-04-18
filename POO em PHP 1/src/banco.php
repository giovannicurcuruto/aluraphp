<?php

require_once 'funcoes.php';
//require 'funcoes.php';
//include 'funcoes.php';

$contasCorrentes = [
    '123456' => [
        'nome' => 'Giovanni',
        'celular' => 999815702,
        'saldo' => 12345
    ],
    '456789' => [
        'nome' => 'Nathaly',
        'celular' => 0,
        'saldo' => 987616
    ],
    '159489' => [
        'nome' => 'Idenor',
        'celular' => 459791261,
        'saldo' => 78945616
    ]
];

//remover
//unset($contasCorrentes['159489']);

titularComLetrasMaiusculas($contasCorrentes['123456']);

$contasCorrentes['456789'] = sacar($contasCorrentes['456789'], 987616);

$contasCorrentes['123456'] = depositar($contasCorrentes['123456'], 1000000);

/*
echo "<ul>";
foreach($contasCorrentes as $cpf => $conta){

    //list('nome' => $nome, 'saldo' =>$saldo) = $conta;
    // é a mesma coisa 
   

    exibeConta($conta);
    
}

echo "</ul>";

echo "####\n";
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste usando texto direto no HTML</title>
</head>

<body>
    <h1>Contas Correntes</h1>

    <dl>

        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3>
                    <?= $conta['nome']; ?> -
                    <?= $cpf; ?>
                </h3>
            </dt>
            <dd>
                Saldo:
                <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>

    </dl>


</body>

</html>