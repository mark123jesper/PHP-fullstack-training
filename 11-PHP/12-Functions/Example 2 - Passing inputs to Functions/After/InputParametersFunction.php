<?php

    declare(strict_types=1);

    //Works on PHP 7
    function printOddNumbers(int $limit, $skipNumber){
        for ($index = 0; $index <= $limit; $index++){
            if( $skipNumber == $index ){
                continue;
            }
            if( $index%2 != 0){
                echo "Odd Number: $index" . PHP_EOL;
            }
        }
    }

    //Call the Function
    printOddNumbers(20, "3");

    //This will raise an Error
    //printOddNumbers("20");

