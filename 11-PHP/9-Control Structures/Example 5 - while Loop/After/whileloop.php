<?php

    //Print Even Numbers from 1 to 10.
    /*
        while(condition){
            // Code to be executed
        }
    */

    //Sample 1 - Recommended Way
    /*
    $value = 1;
    while( $value <= 10 ){

        $value++;
    }
    */

    /*
    for( $value = 1 ; $value <= 10 ; $value++ ) {
        $result = $value%2;
        if( $result > 0 ){
            echo 'Odd Number: ' . $value . PHP_EOL;
        }
    }
    */

    $value = 1;
    while( $value <= 10 ){
        $result = $value%2;
        if( $result == 0 ){
            echo 'Even Number: ' . $value . PHP_EOL;
        }
        $value++;
    }

