<?php

$str = 'Car';
$length = strlen($str)-1;

$str_split = str_split($str); // split into array
$reversed = '';

for ($i=$length; $i >= 0; $i--) { 
    $reversed.=$str_split[$i]; // concat string
}

echo 'Input: '.$str.'<br>';

echo 'Output: '.$reversed;
