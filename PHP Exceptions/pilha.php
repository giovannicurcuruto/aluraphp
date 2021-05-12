<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    /*
    try{
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'Valor';
    } catch (RuntimeException $erro){
        echo "aconteceu um erro na funcao 1 " . PHP_EOL;
    }

*/
    try {
        funcao2();
    } catch (Throwable $problema) {
        //echo "Problema DA funcao 2 e resolvido na funcao 1 OU Problema de divisão" . PHP_EOL;
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    } 

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException('Essa é uma exceção lançada');

    /*
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';

    $divisao = intdiv(5, 0);

*/

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    //var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
