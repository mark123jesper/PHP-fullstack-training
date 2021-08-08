<?php

    //Define constant
    define( LANGUAGE, "PHP");

    //Do not redefine the same constant
    define( LANGUAGE, "JAVA");

    //Do not use same constants and variable names.
    $name = "John, Smith";
    define (name, "John, Smith");
    echo $name . name;

    //Assign CONSTANT to variable to use inside the string
    $lang = LANGUAGE;
    echo "This is the Language: $lang";

    //Magic Constants
    echo __LINE__;