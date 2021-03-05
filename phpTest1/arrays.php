<?php

function occurenceArray()
{

    $names = ['Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian'];
    $length = count($names);

    $names_counter = [];

    // sort names
    for ($key1=0; $key1 < $length; $key1++) { 
        
        for ($key2= $key1+1; $key2 < $length; $key2++) { 
            
            // comparison and sort
            if($names[$key1] > $names[$key2]) {
                $temp = $names[$key1];
                $names[$key1] = $names[$key2];
                $names[$key2] = $temp;
            }
        }
    }

    // count occurrence
    foreach ($names as $key => $name) {
        if(empty($names_counter[$name])) { // index name and set count
            $names_counter[$name] = 1;
        } else {
            $names_counter[$name]++; //existingn index counter
        }
    }
    foreach ($names_counter as $name => $occurence) {
        echo $name . ' - ' . $occurence . '<br>';
    }
}


function sortNumbers(){
    $num_list = [9863, 7127, 2020, 80, 131, 55, 100];
    sort($num_list); //sort function
    foreach ($num_list as $key => $num) {
        $number = ($num%2==1) ? round($num,-1) : $num; // round number if odd
        echo $number . '<br>';
    }
}

function noRepatingStrings()
{
    $colors = ['red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold'];
    
    $limit = count($colors);

    for ($i=0; $i < $limit; $i++) {
        
        $counter = 0;
        
        for ($j=0; $j < $limit; $j++) {
            if ($i != $j) { // don't compare same index
                if ($colors[$i] == $colors[$j]) { //count if occurence found
                    $counter++;
                }   
            }
        }
        if ($counter == 0) {
            echo $colors[$i] . '<br>';
        }
    }
}

echo 'Count occurence: <br>';
occurenceArray();

echo 'Number sort: <br>';
sortNumbers();

echo '<br>Display non-repeating words: <br>';
noRepatingStrings();