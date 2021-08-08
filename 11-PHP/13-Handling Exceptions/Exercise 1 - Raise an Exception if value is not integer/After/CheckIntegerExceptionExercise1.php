<?php

    function printEvenNumbers(int $start, int $end){
        if( $start <= 0 || $end <=0 || $start == $end){
            throw new Exception("Incorrect Input Parameters");
        }

        for(; $start <= $end; $end++){
            if( $start%2 == 0){
                echo "Even: $start" . PHP_EOL;
            }
        }
    }

    function exception_handler($exception){
        echo $exception->getMessage() . PHP_EOL;
    }

    set_exception_handler("exception_handler");
    printEvenNumbers(1, 1);