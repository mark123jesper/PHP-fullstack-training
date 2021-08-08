<?php

    /*
    $inputvalue1 = "John, Smith";
    $inputvalue2 = 0;

    if( $inputvalue2 <= 0 ){
        goto error_block;
    }
    echo 'InputValue2 is greater than 0' . PHP_EOL;

    error_block:
            echo "This is a error block will execute anyway." . PHP_EOL;
    */

    /*
    $inputvalue1 = "John, Smith";
    $inputvalue2 = 0;

    if( $inputvalue2 <= 0 ){
        goto error_block;
    }
    echo 'InputValue2 is greater than 0' . PHP_EOL;
    exit();

    error_block:
         echo "This is a error block will execute anyway." . PHP_EOL;
    */

    /*
    //Breaks the loop and jump out.
    for($count = 0; $count <= 10; $count++){
        if($count == 2){
            goto loop2;
        }
    }


    loop2:
        echo "Counter value is $count" . PHP_EOL;
    */

    /*
    //Cannot jump to goto label inside the loop
    goto loop2;
    for($count = 0; $count <= 10; $count++){
        if($count == 2){
            loop2:
                echo "Counter value is $count" . PHP_EOL;
        }
    }
    */


