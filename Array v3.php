<?php
$start=microtime(true);
$len=100000; // $len=readline("len="); - the number of elements in the array is entered manually

function ARR($length) {
    $number = [];
    while (count($number) < $length) $number[$numb] = ($numb = rand(0, $length*10));
    $values = array_values($number);
    return $values;
}

print_r(ARR($len));
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
