<?php

$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];


matrixElementsSum($matrix);
function matrixElementsSum($matrix)
{

    $SUM = 0;

    for ($COLUNA = 0; $COLUNA < sizeof($matrix[0]); $COLUNA++) {
        if ($matrix[0][$COLUNA] != 0) {
            $SUM += $matrix[0][$COLUNA];
            //echo "Linha 1: " . $SUM . PHP_EOL;
        }
        if ($matrix[1][$COLUNA] != 0) {
            if ($matrix[0][$COLUNA] != 0) {
                $SUM += $matrix[1][$COLUNA];
            }
            //echo "Linha 2: " . $SUM . PHP_EOL;
        }
        if ($matrix[2][$COLUNA] != 0) {
            if ($matrix[0][$COLUNA] != 0) {
                if ($matrix[1][$COLUNA] != 0) {
                    $SUM += $matrix[2][$COLUNA];
                }
            }
            //echo "Linha 3 " . $SUM . PHP_EOL;

            
        }
    }

    return $SUM;
}
