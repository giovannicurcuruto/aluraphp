<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;


class Titular extends Pessoa implements Autenticavel
{
    private endereco $endereco;
   

    public function __construct(cpf $cpf, string $nome, endereco $endereco)
    {   
        parent::__construct($nome, $cpf);
        
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;

    }

    public function recuperaEndereco()
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha ==='abcd';
    }
}
