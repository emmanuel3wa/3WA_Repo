<?php

$numbers = [1,2,3];

function my_sum($i, $y){
    return $i + $y;
};

$f = function ($i, $y){
    return "f($i, $y)";
};

function my_reduce(array $numbers, callable $func, $accumulator = 0){
    foreach($numbers as $value){
        $accumulator = $func($accumulator, $value);
    }
    return $accumulator;
}

var_dump(my_reduce($numbers, 'my_sum'));
var_dump(my_reduce($numbers, $f));