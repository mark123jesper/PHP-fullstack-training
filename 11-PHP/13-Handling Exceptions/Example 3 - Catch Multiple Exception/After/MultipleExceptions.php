<?php

    function custom_exception_handler($exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }

    function divide($a, $b){
        try{
            if( $b <= 0 ) {
                throw new Exception("DivisionByZeroError has Occured!");
            }
            $result = $a / $b;
        }catch(Exception $e){
            throw new Exception("Add method has input param is less than 0." . $e->getMessage());
        }
        return $result;
    }

    //Show with and without the below line.
    set_exception_handler('custom_exception_handler');

    divide(1, 0);