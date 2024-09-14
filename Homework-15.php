<?php

$a = 6;

function getFactorial(int $a) : int
{
    if ($a <= 1) {
        return 1;
    } else {
        return $a * getFactorial($a - 1);
    }
}

echo getFactorial($a); // Результат: 120
