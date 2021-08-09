<?php

$start=microtime(true);

$len = 100000;

function ARR($length) {

    $numbers = [];
    while (count($numbers) < $length) $numbers[$numb] = ($numb = rand(0, $length*10));
    $values = array_values($numbers);

    return $values;
}

print_r(ARR($len));
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
