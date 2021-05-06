<?php 

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Giovann',
    new Endereco('Floripa', 'Teste', 'Rua zoeira', 38)
    )
);

$conta->depositar(900);
$conta->sacar(150);

echo $conta->recuperarSaldo();
