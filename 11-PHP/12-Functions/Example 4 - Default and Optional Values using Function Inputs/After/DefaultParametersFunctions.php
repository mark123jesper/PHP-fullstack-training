<?php
    declare(strict_types=1);

    //Works on PHP 7
    function printOddNumbers(int $limit, $skipNumber = -1){
        for ($index = 0; $index <= $limit; $index++){
            if( $skipNumber == $index ){
                continue;
            }
            if( $index%2 != 0){
                echo "Odd Number: $index" . PHP_EOL;
            }
        }
    }

    //Optional parameters should be last.
    function printEvenNumbers($skipNumber = -1, int $limit ){
        for ($index = 0; $index <= $limit; $index++){
            if( $skipNumber == $index ){
                continue;
            }
            if( $index%2 == 0){
                echo "Even Number: $index" . PHP_EOL;
            }
        }
    }

    printOddNumbers(10);
    //Error
    //printEvenNumbers( 10);