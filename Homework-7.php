<?php

// Исходный массив строк
$strings = ["banana", "apple", "orange", "pear"];

// Добавил эту функию для выбора в каком порядке необходимо вывести!
function getUserChoice() {
    echo "Керек функция танданыз:\n";
    echo "1. Алфавитном пордяке\n";
    echo "2. В обратном алфавитном порядке\n";
    $choice = readline("Введите номер опции: ");
    return $choice;
}

// Фунцкия выбора пользователя
$choice = getUserChoice();

// Сортировка массива в зависимости от выбора пользователя
if ($choice == 1) {
    sort($strings);
    echo "Массив отсортирован в алфавитном порядке:\n";
} elseif ($choice == 2) {
    rsort($strings);
    echo "Массив отсортирован в обратном алфавитном порядке:\n";
} else {
    echo "Брат шатастынгой дим, мынау базар емес!.\n";
    exit;
}

// Вывод отсортированного массива в терминал
foreach ($strings as $string) {
    echo $string . PHP_EOL;
}
?>
