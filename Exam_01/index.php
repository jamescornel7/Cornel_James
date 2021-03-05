<?php

$str = 'Level';

$clean_spaces = strtolower(str_replace(' ','',$str));
$length = strlen($clean_spaces)-1;

$str_split = str_split($clean_spaces); // split into array
$reversed = '';

for ($i=$length; $i >= 0; $i--) { 
    $reversed.=$str_split[$i]; // concat string
}

echo $str . (($clean_spaces == $reversed) ? ' is a Palindrome' : ' is not a Palindrome');
