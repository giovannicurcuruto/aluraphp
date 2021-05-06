<?php 

namespace Alura\Banco\Modelo;

interface Autenticavel {

    public function podeAutenticar(String $senha): bool;
    
        
    
}