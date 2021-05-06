<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Funcionario, Gerente, Diretor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Gerente(
    'Giovanni',
    new CPF('123.789.456-78'),
    1000
);

$duasFuncionarios = new Gerente(
    'Parati',
    new CPF('777.777.888-79'),
    3000
);

$umDiretor = new Diretor(
    'Jovem',
    new CPF('777.777.888-79'),
    10000
);

$umDev = new Desenvolvedor(
    'Aguia de prata',
    new CPF('777.777.888-79'),
    9000
);

$umEditor = new EditorVideo(
    'Mario',
    new CPF('888.888.999-80'),
    1500
);

$umDev->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($duasFuncionarios);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDev);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
