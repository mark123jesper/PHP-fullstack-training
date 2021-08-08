<?php

    //Remember [] means empty arrays

    //Empty Arrays
    $arr = [];

    var_dump( $arr );
    print_r ( $arr );
    //echo $arr[0] . PHP_EOL;
    if( empty($arr) ){
        echo "Array is empty" . PHP_EOL;
    }

    $arr = 10;
    //Guess the output.
    var_dump( $arr ); //Converted Array to Integer


    $arr = [10];
    //Guess the output. - Observe the square brackets.
    var_dump( $arr ); //Converted Integer back to Array


    $arr[0] = [10];
    //Index 0 holds an array which has 10 as first value
    var_dump( $arr ); //Learn more about multidimension array in next lecture

    //Reset the Array
    $arr = [];
    var_dump( $arr );
    if( empty($arr) ){
        echo "Array is empty" . PHP_EOL;
    }

    $arr = [[]];
    //What is this?
    var_dump($arr);

    //Remember [] means empty arrays