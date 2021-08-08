<?php

    function custom_exception_handler($exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }

    set_exception_handler('custom_exception_handler');

    //Try with and without finally block
    //finally block is executed before exception is raised.
    //throw new Exception("Exception is raised");
    //echo "This line is executed?";

    try {
        throw new Exception("Exception is raised");
    }finally{
        echo "This line is executed?";
    }


