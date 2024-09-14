<?php

$age = array(                   //Это база имена и возраста!
    "Berik"=>"52",
    "Gulzira"=>"49",
    "Anar"=>"27",
    "Abylay"=>"26"
);

function getAge($name) {
    global $age;
    if (array_key_exists($name, $age)) {
        echo "$name is " . $age[$name] . " years old.";
    } else {
        echo "Имя не найдено в базе данных.";
    }
}

// Можно ввести имя которая нужна!
$name = readline("Укажите имя: ");
getAge($name);



