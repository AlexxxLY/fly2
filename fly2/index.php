<?php

//define('COUNT_ARRAY', 16);

$a = [];
$b = [];
$c = [];

function arr_rand($arr, $max, $min, $count)
{

    for ($i = 0; $i < $count; $i++) {
        $arr[$i] = rand($min, $max);
    }

    return $arr;
}

function positive_($arr)
{

    $result = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            $result[$i] = $arr[$i];
        }
    }

    return $result;
}

function negative_($arr)
{

    $result = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0) {
            $result[$i] = $arr[$i];
        }
    }

    return $result;
}

$a = arr_rand($a, -10, 10, 16);
print_r(arr_rand($a, -10, 10, 16));
$b = positive_($a);
print_r($b);
$c = negative_($a);
print_r($c);
