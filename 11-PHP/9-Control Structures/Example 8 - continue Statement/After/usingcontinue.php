<?php

    //continue will skip the next line and go to next loop
    //1) Print Even Numbers using While Infinite Loop and Break after 10 numbers.
    $value = 1;
    while(true) {

        $result = $value % 2;


        if($result == 1) {
            $value++;
            continue;
        }

        if($value > 10){
            break;
        }

        echo "Even Number: " . $value . PHP_EOL;
        $value++;
    }
