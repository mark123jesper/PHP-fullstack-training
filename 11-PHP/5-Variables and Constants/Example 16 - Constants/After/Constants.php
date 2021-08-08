<?php

    //Define constant
    //define( NAME, VALUE);

    //Sample 1
    define( "LANGUAGE", "PHP");
    $lang = LANGUAGE;
    echo "This program is written using $lang <br>";
    echo "This program is written using LANGUAGE <br>";
    echo "This program is written using " . LANGUAGE . " <br>";


    //Sample 2
    define( "LANGUAGE", "JAVA");
    echo "This program is written using " . LANGUAGE . " <br>";

    //Sample 3
    $LANGUAGE = "JAVA";
    echo "This program is written using " . $LANGUAGE . " <br>";
    echo "This program is written using " . LANGUAGE . " <br>";


    //Sample 4 - Error - Same Rules as Variable
    //define( "7VERSION", "7.3");
    //echo 7VERSION;

    //Sample 5 - isset does not work and constant can be empty as well.
    define ( "NAME", "");
    //echo isset(NAME);
    //echo NAME;


    //Access constants using the constants method.
    echo constant('NAME');