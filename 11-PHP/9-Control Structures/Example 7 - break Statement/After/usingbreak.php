<?php

    //Break an Infinite Loop
    //Print 1 to 10 using Infinite Loop
    $value = 1;
    do{
        echo $value . PHP_EOL;
        if( $value >= 10){
            break;
        }
        $value++;
    }while(true);


    //Break multiple loops
    $loop1 = 1;
    $loop2 = 1;
    $loop3 = 1;
    for( ; $loop1 <= 10; $loop1++) {

        while( $loop2 <= 10){

            do{
                if ( $loop3 == 5) {
                    break 1;
                }
                echo "Loop 3: $loop3" . PHP_EOL;
                $loop3++;
            }while( $loop3 <= 10);


            if ( $loop2 == 6) {
                break 1;
            }
            echo "Loop 2: $loop2" . PHP_EOL;
            $loop2++;
        }
        if ( $loop1 == 7) {
            break 1;
        }
        echo "Loop 1: $loop1" . PHP_EOL;
    }