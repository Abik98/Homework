<?php

function getInfo($name, $age) {
    return "Ваше имя: " . $name . "\nВаш возраст: " . $age . " лет\n";
}

// Пример использования функции
$info = getInfo("Абылай", 26);
echo $info;


