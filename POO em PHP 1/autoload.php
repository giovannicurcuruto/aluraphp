<?php

spl_autoload_register(function (string $nameOfClass)
{
   $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nameOfClass);
   $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
   $caminhoArquivo .= '.php';

   if(file_exists($caminhoArquivo)){
       require_once $caminhoArquivo;
   }
});