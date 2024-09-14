<?php


echo "Напиши брат слово про цифру или цифру про слово: "; //Добавил функцию вывода на экран для удобста
$input = trim(fgets(STDIN)); //Выучил эту функцию для выбора из нижких базы

function wordToDigit($word) //Основа для структуризации и вывода из данных
{
    $words = array(
        'zero' => 0,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9
    );

    $word = strtolower($word);
    if (array_key_exists($word, $words)) {
        return $words[$word];
    } else {
        return "Брат шатаскан сиактыснгой!";
    }
}

function numberToWords($number)
{
    $words = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine'
    );

    if (array_key_exists($number, $words)) {
        return $words[$number];
    } else {
        return "Брат алыска кетингой!";
    }
}

if (is_numeric($input)) {
    $number = (int)$input;
    echo numberToWords($number);
} else {
    echo wordToDigit($input);
}
