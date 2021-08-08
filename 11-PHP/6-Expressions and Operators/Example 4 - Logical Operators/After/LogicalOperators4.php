<?php

    /*
     *  AND - both should be true
     *  OR - any one can be true
     *  && - both should be true
     *  || - any one can be true
     *  ! - if not
     *
     */

    //Sample 1
    //Greet Hello, Name if the user is logged in and has permission
    $permission = true;
    $loggedin = true;
    $user = "John, Smith";

    echo ( $permission and $loggedin ) ? "Hello $user" : "Hello, Guest";
    echo PHP_EOL;

    //Sample 2
    //Check if student passed any one exam
    $student = "John";
    $mathspassed = true;
    $sciencepassed = true;

    //Either this or that is true
    echo ($mathspassed or $sciencepassed) ? "$student has passed" : "$student has not passed";
    echo PHP_EOL;

    //Sample 3
    //Find the difference between and &&
    $result1 = (true && false) ? "true": "false";
    $result2 = (true and false)? "true": "false";
    echo "Result 1: $result1";
    echo PHP_EOL;
    echo "Result 2: $result2";
    echo PHP_EOL;

    //Sample 4
    //Find the difference between or ||
    $result1 = true || false ;
    $result2 = true or false;

    echo ($result1) ? "true": "false";
    echo PHP_EOL;
    echo ($result2)? "true": "false";
    echo PHP_EOL;


    echo (true || false) ? "true": "false";
    echo PHP_EOL;
    echo (true or false)? "true": "false";
    echo PHP_EOL;

