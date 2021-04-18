<?php

class cpf
{
    private $numero;

    public function __contruct(string $numero)
    {

        if (strlen($numero) > 14 && strlen($numero) < 11) {
            echo "Formato invalido";
        }

        $this->numero = $numero;
    }

    
    public function recuperaNumero()
    {
        return $this->numero;
    }


}
