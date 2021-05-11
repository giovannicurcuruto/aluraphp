<?php

require_once 'calculadora.php';


//$notas = [9,3,10,5,10];
$notas =[];

echo "<p>A nota de português é  $notas[0]</p>"; 
echo "<p>A nota de MTM é  $notas[1]</p>"; 
echo "<p>A nota de Historia é  $notas[2]</p>"; 
echo "<p>A nota de GEO é  $notas[3]</p>"; 
echo "<p>A nota de Quimica é  $notas[4]</p>"; 

$calculadora = new Calculadora();
$mediaFinal = $calculadora->calculaMedia($notas);

if ($mediaFinal) {
    echo "A média é: $mediaFinal";
} else {
    echo "Não foi possível calcular a média";
}





