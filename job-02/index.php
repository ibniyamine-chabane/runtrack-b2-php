<?php

function my_str_reverse(string $myString) {
    $i=0;
    while (isset($myString[$i])) {
        $i++;   
    }

    for ($j= $i-1; $j >=0 ; $j--) { 
        echo $myString[$j];
    }
    
}

my_str_reverse("murder");
?>