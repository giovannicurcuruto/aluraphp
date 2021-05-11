<?php

$nomes= "Giovanni, João, Maria, Pedro";

$arrayNovo_nomes = explode(", ", $nomes);

foreach($arrayNovo_nomes as $nome){
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(', ', $arrayNovo_nomes);

echo "$nomesJuntos";