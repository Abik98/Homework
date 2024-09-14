<?php

$fruits = array("Apple", "Banana", "Orange");

// Отобразим сначала все элементы массива!
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// Тут уже выбираем именно какой элемент нужен для вывода и обозначнение!
echo "Выбранный элемент: " . $fruits[1]; // Выведет "Banana"
