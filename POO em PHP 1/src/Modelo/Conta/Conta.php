<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{

    private string $Titular;
    protected float $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->saldo = 0;
        $this->titular = $titular;



        self::$numeroDeContas++;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();

        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas()
    {
        return self::$numeroDeContas;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperaCPF();
    }

    abstract protected function percentualTarifa(): float;
    
}
