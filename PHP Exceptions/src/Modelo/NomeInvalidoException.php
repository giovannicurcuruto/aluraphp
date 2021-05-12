<?php

namespace Alura\Banco\Modelo;

use Exception;

class NomeInvalidoException extends Exception{
    public function __contruct($nomeTitular)
    {        
        $mensagem = "Nome Invalido - Quantidade de Caracteres não bate para $nomeTitular";
        parent::__construct($mensagem);

    }
}