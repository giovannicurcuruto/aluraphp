<?php


namespace Alura;

require_once 'autoload.php';

/*
$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
  ];

  $correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

  echo "<pre>";
  var_dump($correntistas);
  echo "</pre>"; */

  $correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];

  $relacionados = array_combine($correntistas, $saldos);
/*
  echo "<pre>";
  var_dump($relacionados);
  echo "</pre>";

 */

 $relacionados["matheus"] = 4150; 

 echo "<pre>";
  var_dump($relacionados);
  echo "</pre>";

  if(array_key_exists("Giovanni", $relacionados)){
    echo "O saldo do Giovanni é {$relacionados["Giovanni"]} ";    
  }else{
      echo "não foi encontrado";
  }
  
  $maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

  echo "<pre>";

  var_dump($maiores);

  echo "</pre>";