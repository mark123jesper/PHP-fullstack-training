<?php

    //1) Check for Odd or Even Numbers and Print it.
    // Using 'else if'
    $input_number = 10;
    $result = $input_number % 2;
    if( $result ) {
        echo 'Odd Number' . PHP_EOL;
    }else if ( !$result ) {
        echo 'Even Number' . PHP_EOL;
    }

    switch($result) {
        case 1:
            echo 'Odd Number' . PHP_EOL;
            break;
        case 0:
            echo 'Even Number' . PHP_EOL;
            break;
    }

    //Check if input_number is greater than 10
    //Recommended 'elseif'
    if( $input_number  > 10 ) {
        echo 'Number greater than 10' . PHP_EOL;
    } elseif ( $input_number  == 10 ){
        echo 'Number equal than 10' . PHP_EOL;
    } else {
        echo 'Number less than 10' . PHP_EOL;
    }

    //Recommeded to use if for conditional
    switch(true) {
        case $input_number > 10:
            echo 'Number greater than 10' . PHP_EOL;
            break;
        case $input_number  == 10:
            echo 'Number equal than 10' . PHP_EOL;
            break;
        default:
            echo 'Number less than 10' . PHP_EOL;
    }

    //String based switch condition
    $weekday = "Fri";
    switch($weekday) {
        case "Mon":
            echo 'Monday' . PHP_EOL;
            break;
        case "Fri":
            echo 'Friday' . PHP_EOL;
            break;
        default:
            echo 'Others' . PHP_EOL;
    }

