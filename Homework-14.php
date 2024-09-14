<?php

$text = '1,2,67,55,43,90,100';
$numbers = explode(',', $text);

$textArray = array_map('strval', $numbers);

print_r($textArray);





