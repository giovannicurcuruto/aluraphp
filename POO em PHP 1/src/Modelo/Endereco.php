<?php

namespace Alura\Banco\Modelo;

/** 
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

   

    public function __set($nomeAtributo, $valor)

    {
        if ($nomeAtributo === '$bairro') $this->bairro = $valor;
        if ($nomeAtributo === '$cidade') $this->cidade = $valor;
        if ($nomeAtributo === '$rua') $this->rua = $valor;
        if ($nomeAtributo === '$numero') $this->numero = $valor;
        
    }
}