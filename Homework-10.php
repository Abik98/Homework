<?php

$colors = array('red', 'green', 'blue', 'yellow');
$translatedColors = array();

function translateToRussian($color) {
    $translations = array(
        'red' => 'красный',
        'green' => 'зеленый',
        'blue' => 'синий',
        'yellow' => 'желтый'
    );
    return $translations[$color] ?? $color;
}

function translateToEnglish($color) {
    $translations = array(
        'красный' => 'red',
        'зеленый' => 'green',
        'синий' => 'blue',
        'желтый' => 'yellow'
    );
    return $translations[$color] ?? $color;
}

// Перевод на русский
foreach ($colors as $color) {
    $translatedColors[] = translateToRussian($color);
}

echo "Переведенные на русский: " . implode(' ', $translatedColors) . "\n";

// Перевод обратно на английский
$originalColors = array();
foreach ($translatedColors as $color) {
    $originalColors[] = translateToEnglish($color);
}

echo "Переведенные обратно на английский: " . implode(' ', $originalColors);
