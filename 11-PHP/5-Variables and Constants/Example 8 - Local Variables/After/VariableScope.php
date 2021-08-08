<?php


    /* Sample 1 */
    //Guess the output
    $name = "Srini!";

    function print_name() {
        //Scope of this variable is limited to this function.
        //This variable dies after the function is finished.
        //$name in this function is called as Local Variable.
        $name = "PHP!";
    }

    print_name();
    echo $name;


    //Guess the output
    //message variable scope is outside of any functions
    $message = "Welcome to PHP!";
    function print_message() {
        //Variable not defined error.
        echo $message;
    }
    print_message();

    /*
     * By default, variables created within a function are local to that function,
     * and variables created outside of any functions can be accessed only by nonfunction code.
     */
