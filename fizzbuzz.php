<?php

    //numbers from 1 to 100
    //3 = fizz
    //5 = buzz
    //both = fizzbuzz
    
    for($i=1;$i<=100;$i++) {
        echo $i . ' ';
        if($i%3==0) echo 'Fizz';
        if($i%5==0) echo 'Buzz';
        echo '<br>';
    }

?>