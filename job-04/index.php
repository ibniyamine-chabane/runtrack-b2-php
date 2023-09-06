<?php 

function my_fizz_buzz(int $length) {
    
    if ($length%3 == 0 && $length%5 == 0) {
        echo "FizzBuzz";
    } else if ($length%3 == 0 && $length%5 != 0) {
        echo "Fizz";
    } else if ($length%3 != 0 && $length%5 == 0) {
        echo "Buzz";
    }

}

?>