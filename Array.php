<?php

$start = microtime(true);

function ARR($n){

    $array_even = array();
    $array_odd = array();
    $array_fin = array();

    while(count($array_fin) != $n) {

        $number = rand(1,$n*$n);

        if ($number % 2 == 0) {
            if (!(in_array($number, $array_even))) {
                array_push($array_even, $number);
                array_push($array_fin, $number);
            }
        }
        else {
            if (!(in_array($number, $array_odd))) {
                array_push($array_odd, $number);
                array_push($array_fin, $number);
            }
        }
    }

    return $array_fin;

}

print_r(ARR(100000));
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';

?>
