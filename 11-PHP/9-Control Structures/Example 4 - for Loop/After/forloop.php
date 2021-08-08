<?php

    //Print Odd Numbers from 1 to 10.
    /*
        for(initialization; condition; increment){
            // Code to be executed
        }
    */


    //Sample 1 - Recommended Way
    for( $value = 1 ; $value <= 10 ; $value++ ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }

    //Sample 2
    $value = 1;
    for(  ; $value <= 10 ; $value++ ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }

    //Sample 3
    $value = 0;
    for(  ; $value <= 10 ; ++$value ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }

    //Sample 4
    $value = 0;
    for(  ; $value <= 10 ; ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
        $value++;
    }