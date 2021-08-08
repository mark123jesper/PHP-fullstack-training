<?php

    //1) Check for Odd or Even Numbers and Print it.
    // Using 'else if'
    $input_number = 10;
    $result = $input_number % 2;
    if( $result ){
        echo 'Odd Number' . PHP_EOL;
    }else if ( !$result ) {
        echo 'Even Number' . PHP_EOL;
    }

    /*
        if(condition1){
            // Code to be executed if condition1 is true
        } elseif(condition2){
            // Code to be executed if the condition1 is false and condition2 is true
        } else{
            // Code to be executed if both condition1 and condition2 are false
        }
    */

    //Check if input_number is greater than 10
    //Recommended 'elseif'
    if( $input_number  > 10 ){
        echo 'Number greater than 10' . PHP_EOL;
    } elseif ( $input_number  == 10 ){
        echo 'Number equal than 10' . PHP_EOL;
    } else {
        echo 'Number less than 10' . PHP_EOL;
    }