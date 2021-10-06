<?php

class Fibo
{

public function __construct(private int $max = 15)
{
    
}

function sum($a, $b){
    return $a + $b;
} 

function gen(){
    $a = 1;
    $b = 1;

    yield $a;
    yield $b;

    for ($i=0; $i < $this->max; $i++){
        $tmp = $this->sum($a, $b);
        yield $tmp;
        $b = $a;
        $a = $tmp;
    }
}

function ifNarcissiqueNum(int $n){
    $sum = 0;
    $temp = $n; /*Store the original number in $temp*/
	$totalDigits = strlen($n); /*Total number of digits comprising $n*/
	
	while($n != 0) {
		$r = $n%10; /*Extract the last digit*/
		$sum = $sum + pow($r, $totalDigits);
		$n = floor($n/10); /*Reduce number by one digit*/
	}
	
    return ($sum == $temp);
}
}
