<?php

$start=microtime(true);

$length = 100000;

$numbers = [];
while (count($numbers) < $length) $numbers[$numb] = ($numb = rand(0, $length*10));
$values = array_values($numbers);

print_r($values);
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';

for ($i = 0; $i < $length;  $i ++) {
    for ($j = $i + 1; $j < $length; $j++) {
        if ($values[$i] == $values[$j]) {
            echo "\n $values[i], $values[j], $i, $j";
        }
    }
}

echo "konec'";