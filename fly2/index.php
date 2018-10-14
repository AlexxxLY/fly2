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
    $num = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            $result[$num] = $arr[$i];
            $num++;
        }
    }

    return $result;
}

function negative_($arr)
{

    $result = [];
    $num = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0) {
            $result[$num] = $arr[$i];
            $num++;
        }
    }

    return $result;
}

$a = arr_rand($a, -10, 10, 16);
print_r($a);
$b = positive_($a);
print_r($b);
$c = negative_($a);
print_r($c);

if(count($b) > count($c)){
    echo 'count $b > $c   $b= '.count($b);
}
else{
    echo 'count $c > $b   $c= '.count($c);
}
