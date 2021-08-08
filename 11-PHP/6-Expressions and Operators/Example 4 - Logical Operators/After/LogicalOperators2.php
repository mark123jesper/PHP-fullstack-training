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


