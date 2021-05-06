<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Floripa',
    'Coqueiros',
    'rua do saber ',
    89
);

$outroEndereco = new Endereco(
    'Sao Paulo',
    'Lapa',
    'avenida europa',
    1500
);

$umEndereco->__set('$numero', 10);

echo $outroEndereco-> numero . PHP_EOL;
echo $umEndereco->numero;
exit();

echo $outroEndereco;