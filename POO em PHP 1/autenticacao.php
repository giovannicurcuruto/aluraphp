<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador;
$umDiretor = new Gerente(
    'Daniel',
    new CPF('159.789.159-80'),
    1500
);

$autenticador->tentaLogin($umDiretor, 1234);