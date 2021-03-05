<?php

// while loop function
function whileLoop($ctr, $limit)
{
    while ($ctr <= $limit) {
        $output = ($ctr%2==0) ? $ctr : '';
        echo $output . ' ';
        $ctr++;
    }

}

// do while function
function doWhileLoop($ctr, $limit)
{
    do {
        $output = ($ctr%2==1) ? $ctr : '';
        echo $output . ' ';
        $ctr++;
    } while ($ctr <= $limit);
}

// for loop function
function forLoop($ctr, $limit)
{
    $num1 = $ctr;
    $num2 = $ctr+1;
    for ($i=$ctr; $i < $limit; $i++) { 
        $num3 = $num1 + $num2;
        echo $num1 . ' ';
        $num1 = $num2;
        $num2 = $num3;
    }
}

$ctr = 0;
$limit = 10;

echo "While Loop: ";
whileLoop($ctr, $limit);

echo "<br>Do While Loop: ";
doWhileLoop($ctr, $limit);

echo "<br>For Loop: ";
forLoop($ctr, $limit);