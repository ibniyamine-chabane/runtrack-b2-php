<?php
function my_str_search(string $haystack, string $needle ) {
   
    $i=0;
    $b=0;
    while (isset($haystack[$i])) {

        if ($haystack[$i] == $needle) {
            $b++;
        }
        $i++; 
    }
       return $b;    
}

?>