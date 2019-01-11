<?php
for ($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz";
        echo "<BR>";
    }
    else if($i % 3 == 0){
        echo "Fizz";
        echo "<BR>";
    }
    else if($i % 5 == 0){
        echo "Buzz";
        echo "<BR>";
    }
    else {
        echo $i;
        echo "<BR>";
    }
}

?>
