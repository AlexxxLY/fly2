<?php

//define('COUNT_ARRAY', 16);

$a = [];

function arr_rand($arr, $max, $min, $count ){
  
    for($i = 0; $i < $count; $i++) {
      $arr[$i] = rand($min, $max);
  }

    return $arr;
}


print_r(arr_rand($a, -10, 10, 16));