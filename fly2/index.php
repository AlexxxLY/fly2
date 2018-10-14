<?php

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

function separation($arr, $arr_positive, $arr_negative)
{

    $result = [];
    $num_p = 0;
    $num_n = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            $arr_positive[$num_p] = $arr[$i];
            $num_p++;
        } elseif ($arr[$i] < 0) {
            $arr_negative[$num_n] = $arr[$i];
            $num_n++;
        }
    }
    return array($arr_positive, $arr_negative);
}

$a = arr_rand($a, -10, 10, 16);
print_r($a);

$b = separation($a, $b, $c)[0];
print_r($b);

$c = separation($a, $b, $c)[1];
print_r($c);

if (count($b) > count($c)) {
    echo 'count $b > $c   $b= ' . count($b);
} else {
    echo 'count $c > $b   $c= ' . count($c);
}
