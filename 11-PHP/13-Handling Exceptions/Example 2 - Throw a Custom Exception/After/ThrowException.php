<?php

    /*
    function custom_exception_handler($exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }

    set_exception_handler('custom_exception_handler');
    throw new Exception("Exception is raised");
    */

    function custom_exception_handler($exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }

    function add($a, $b){
        if($a <= 0){
            throw new Exception("Add method has input param as 0.");
        }
        $result = $a + $b;
        return $result;
    }

    //Show with and without the below line.
    set_exception_handler('custom_exception_handler');
    add(0, 2);