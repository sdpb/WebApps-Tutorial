<?php

function determinant($matrix){
    return $matrix[0][0] * ($matrix[1][1] * $matrix[2][2] - $matrix[1][2] * $matrix[2][1]) -
           $matrix[0][1] * ($matrix[1][0] * $matrix[2][2] - $matrix[1][2] * $matrix[2][0]) +
           $matrix[0][2] * ($matrix[1][0] * $matrix[2][1] - $matrix[1][1] * $matrix[2][0]);
}

function scalar_multiply($matrix, $scalar)
{
    foreach ($matrix as &$row) {
        foreach ($row as &$col) {
            $col *= $scalar;
        }
    }
    return $matrix;
}

function print_matrix($matrix){
    echo "<p>Matrix: \n\n";
    foreach ($matrix as $row){
        foreach ($row as $col){
            echo "|\t$col\t|\t";
        }
        echo "\n";
    }
    echo "</p>\n";
}


