<?php

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach($saldos as $saldoFinal){
    echo "<p>O saldo é $saldoFinal</p>";
}

sort($saldos);

echo "<p>depois da ordenação</p>";

foreach($saldos as $saldoFinal){
    echo "<p>O saldo é $saldoFinal</p>";
}

echo "O menor saldo é $saldos[0]";