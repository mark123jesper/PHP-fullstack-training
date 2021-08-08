<?php

/*
   function function_name(param_1, ... , param_n)
   {
       statement_1;
       statement_2;
       ...
       statement_m;

       return return_value;
   }
*/

    //Define a Function
    function printEvenNumbers($limit){
        for ($index = 0; $index <= $limit; $index++){
            if( $index%2 == 0){
                echo "Even Number: $index" . PHP_EOL;
            }
        }
    }

    //Call the Function
    printEvenNumbers(20);
    printEvenNumbers("20");