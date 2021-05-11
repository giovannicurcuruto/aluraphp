<?php

class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        $qtoNotas = sizeof($notas);
        if ($qtoNotas > 0) {
            $soma = 0;
            for ($i = 0; $i < $qtoNotas; $i++) {
                $soma += $notas[$i];
            }

            $media = $soma / $qtoNotas;

            
            return $media;
        } else{
            return null;
        }
    }
}
