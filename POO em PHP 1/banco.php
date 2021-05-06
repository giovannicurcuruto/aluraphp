<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular , Conta};
use Alura\Banco\Modelo\{Endereco , CPF};

$endereco = new Endereco('Floripa', 'Coqueiros', 'Avenida 1', '78');
$endereco2 = new Endereco('123', '111', 'Avenida 1', '123');

$primeiraConta = new Conta(new Titular(new CPF('079.831.369-27'), 'Giovanni Curcuruto', $endereco));
$primeiraConta->depositar(500);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;


$MariaMaria = new Titular(new CPF('314.487.987-70') , 'Maria Maria', $endereco);
$segundaConta = new Conta($MariaMaria);

echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
var_dump($segundaConta);