<?php

function checkFibonnaci($n)
{
    $n1 = 5*($n*$n)+4;
    $n2 = 5*($n*$n)-4;

    $n1_result = checkPerfectSquare($n1);
    $n2_result = checkPerfectSquare($n2);

    if($n1_result || $n2_result) {
        echo $n . ' is a fibonacci number<br>';
    } else {
        echo $n . ' is not a fibonacci number<br>';
    }
    
}

function checkPerfectSquare($s)
{
    $sqrt = (int)sqrt($s); // type cast to whole number(int)
    return ($sqrt*$sqrt == $s) ? true : false;

}

for ($i=1; $i <= 10 ; $i++) { 
    checkFibonnaci($i);
}