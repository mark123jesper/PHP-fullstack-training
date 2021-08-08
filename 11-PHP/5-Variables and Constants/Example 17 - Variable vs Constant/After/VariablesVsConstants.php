<?php

    /*
     * 1) No need to use $ to use the constant
     * 2) Constant are defined only via the define method not assignemnt operator.
     * 2) Value can be assigned only once.
     * 3) Constant has Global Scope. Can access anywhere.
     * 4) constant method can be used to access the constants.
     */

    $name = "John, Smith";
    define (name, "John, Smith");

    echo $name . name;

    //Able to change variable
    $name ="Walter, White";
    define (name, "Walter, White");
    echo $name . name;

    //One Advise use constants always CAPS and variables as lowercase.