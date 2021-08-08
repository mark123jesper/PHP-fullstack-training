<?php

    /*
     * NULL is case insensitive. null / NULL are same
     * null is used to initialize a variable with empty value.
     * unset() and is_null() methods
     * Most common use case is to check if the variable has a value or empty
     */

    //Define and Check Null
    $name = null;
    echo $name . PHP_EOL;
    echo ($name) ? "Has Value" : "Empty" . PHP_EOL;

    //Check if the Variable is Null or not
    $name = "0";
    echo ( $name ) ? "Has Value" : "Empty" . PHP_EOL;
    echo ( !is_null($name) ) ? "Not Null" : "Empty" . PHP_EOL;

    //Remove the Variable from the Program and Memory
    unset($name);
    echo ( !is_null($name) ) ? "Not Null" : "Empty" . PHP_EOL;
