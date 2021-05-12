<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('079.831.369-27'),
        'Giovanni',
        new Endereco('Floripa', 'Coqueiros', 'Rua do Saber', 78)
    )
);

try{
    $contaCorrente->deposita(100);
} catch (Exception $e){
    echo "Valor a depositar precisa ser positivo";
}

$nomeDaFigura = "CU";
try{
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('079.831.369-27'),
            $nomeDaFigura,
            new Endereco('Floripa', 'Coqueiros', 'Rua do Saber', 78)
        )
    );
} catch(Exception $e){
    echo "Criação de conta Invalida". PHP_EOL;
    echo $e->getMessage() ;
}

