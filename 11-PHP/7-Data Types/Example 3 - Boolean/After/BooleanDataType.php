<?php

    /*
     * true or false / TRUE OR FALSE can be used to assign a boolean variable
     * Boolean are literals are case insensitive - True or true or TRUE are same.
     * true = 1 and false = 0 when displayed with echo
     * Integer variable with value 0 is false and anything else is true
     * String variable with value "0" is false and anything else is true
     * Boolean is used in condition to check something.
     * Operators which results into boolean conditions
     */

    //Define and Use the Boolean Variable
    $flag1 = TRUE;
    $flag2 = FALSE;
    echo ($flag1) ? "True" : "False";
    echo PHP_EOL;

    //Print Boolean Variable
    echo "True: " . $flag1 . PHP_EOL;
    echo "False: " . $flag2 .PHP_EOL;


    //Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName = "John, Smith";
    echo ( $isLoggedIn && $userSessionName ) ? "User Logged In" : "User Not Logged In";
    echo PHP_EOL;

    //Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName = null;

    echo ( $isLoggedIn && $userSessionName ) ? "User Logged In" : "User Not Logged In";
    echo PHP_EOL;

    //Use Integer Variable as Boolean - Watchout for Negative Values
    $marks = 1;
    echo ( $marks ) ? "Marks has values" : "Marks does not have any value";
    echo PHP_EOL;


    //Operators results into Boolean condition
    $name = "John";
    echo ( $name === "John" ) ? "Yes John" : "Not John";
    echo PHP_EOL;


