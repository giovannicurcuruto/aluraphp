<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/cpf.php';

$primeiraConta = new Conta(new Titular(new cpf('079.831.369.27'), 'Giovanni Curcuruto'));
$primeiraConta->depositar(500);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;

$segundaConta = new Conta(new Titular(new cpf('314.487.987-70') , 'Maria Maria'));
echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
