<?php

    //Good Practise 1: Always use UPPERCASE to define constants
    define( LANGUAGE, "PHP");
    define( VERSION, 7.3);

    //Good Practise 2: Do not use constants like __CONSTANT__
    define( __CONSTANT__ , "Wrong Practise");

    //Good Practise 3: Avoid the same name as Variable to avoid confusion
    $message = "This is PHP Constants!";
    define( message, "This is another message");

    //Constant naming rules are similar to Variables.
    //define( 1LANGUAGE , "PHP");
    define( LANGUAGE-USED , "PHP");
    echo LANGUAGE-USED;


